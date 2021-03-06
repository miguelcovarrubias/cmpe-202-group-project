package hello;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.validation.BindingResult;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.ResponseBody;
import javax.validation.Valid;

@Controller
@RequestMapping(path="/") // This means URL's start with /demo (after Application path)
public class MainController {
    @Autowired // This means to get the bean called userRepository
    // Which is auto-generated by Spring, we will use it to handle the data
    private UserRepository userRepository;

    @Autowired
    private CardsInfoRepository cardsInfoRepository;


    @GetMapping(path="/addUser") // Map ONLY GET Requests
    public @ResponseBody
    String addNewUser (
            @RequestParam String name,
            @RequestParam String email) {
        // @ResponseBody means the returned String is the response, not a view name
        // @RequestParam means it is a parameter from the GET or POST request

        User n = new User();
        n.setName(name);
        n.setEmail(email);
        userRepository.save(n);
        return "Saved";
    }

    @GetMapping(value = "/addNewCardForm")
    public String getNewCrdForm(Model model) {
        model.addAttribute("cardsinfo", new CardsInfo());
        return "addCard";
    }

    @PostMapping(value = "/addCard")
    public String addNewCard(CardsInfo cardsInfo, BindingResult bindingResult) {

        cardsInfo.setUser_id(3);
        cardsInfoRepository.save(cardsInfo);
        return "redirect:/allCards";
    }

    @GetMapping("/allCards")
    public String getAllCards(@RequestParam(name="name", required=false, defaultValue="") String name, Model model) {
        model.addAttribute("name", name);
        model.addAttribute("cards", cardsInfoRepository.findAll());
        model.addAttribute("cardsinfo", new CardsInfo());
        return "cards";
    }

}
