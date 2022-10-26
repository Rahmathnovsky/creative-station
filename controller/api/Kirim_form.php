<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Kirim_form extends KLP_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function send_email ()
    {
        $name = $this->input->post("name");
        $email = $this->input->post("email");
        $subject = $this->input->post("subject");
        $desc = $this->input->post("description");

        $email_data = array(
            "name" => $name,
            "description" => $desc,
            "email" => $email,
            "subject" => $subject
        );

        $email = kirimEmail('marketing@simsalabim-ds.com', 'Pesan dari ('.$name.')', 'Simsalabim', 'kirim_form.php', $email_data);

        echo $email;
    }

    function apply_career ()
    {
        $hiring_form_name = $this->input->post("full_name");
        $hiring_form_email = $this->input->post("email");
        $hiring_form_phone = $this->input->post("phone");
        $hiring_form_pob = $this->input->post("birth_location");
        $hiring_form_dob = $this->input->post("birth_date");
        $hiring_form_address = $this->input->post("address");

        $career_data = array(
            "full_name" => $hiring_form_name,
            "email" => $hiring_form_email,
            "phone" => $hiring_form_phone,
            "birth_location" => $hiring_form_pob,
            "birth_date" => $hiring_form_dob,
            "address" => $hiring_form_address
        );

        $hiring = kirimEmail('rahmat@simsalabim-ds.com', 'Pesan dari ('.$hiring_form_name.')', 'Hiring | Simsalabim', 'apply_career.php', $career_data);

        echo $hiring;
    }
}