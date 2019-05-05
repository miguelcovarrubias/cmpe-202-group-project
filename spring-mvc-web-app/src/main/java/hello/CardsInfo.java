package hello;

import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.Table;
import javax.validation.constraints.Max;
import javax.validation.constraints.Min;
import javax.validation.constraints.NotNull;

@Entity // This tells Hibernate to make a table out of this class
@Table(name = "cards_info")
public class CardsInfo {
    @Id
    @GeneratedValue(strategy=GenerationType.IDENTITY)
    private Integer card_id;
    private Integer card_number;
    private Integer card_code;
    private Integer user_id;


    public Integer getCard_id() {
        return this.card_id;
    }

    public void setCard_id(Integer card_code) {
        this.card_code = card_code;
    }

    public Integer getCard_code() {
        return this.card_code;
    }

    public void setCard_code(Integer card_code) {
        this.card_code = card_code;
    }

    public Integer getCard_number() {
        return this.card_number;
    }

    public void setCard_number(Integer card_number) {
        this.card_number = card_number;
    }

    public Integer getUser_id() {
        return this.user_id;
    }

    public void setUser_id(Integer user_id) {
        this.user_id = user_id;
    }
}

