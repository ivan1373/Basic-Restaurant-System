/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package restoran.controller;

import java.time.LocalDate;
import java.time.format.DateTimeFormatter;
import com.jfoenix.controls.JFXButton;
import com.jfoenix.controls.JFXDatePicker;
import com.jfoenix.controls.JFXPasswordField;
import com.jfoenix.controls.JFXTextField;
import java.io.IOException;
import java.net.URL;
import java.text.DateFormat;
import java.text.SimpleDateFormat;
import java.util.Date;
import java.util.Properties;
import java.util.ResourceBundle;
import java.util.concurrent.TimeUnit;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Alert;
import javafx.scene.control.Label;
import javafx.scene.image.ImageView;
import javafx.stage.Stage;
import restoran.model.Korisnik;

/**
 * FXML Controller class
 *
 * @author ivanm
 */
public class RegistracijaController implements Initializable {

    /**
     * Initializes the controller class.
     */
    
    @FXML
    private Label naslovlbl;

    @FXML
    private JFXTextField txtRime;

    @FXML
    private JFXTextField txtRprez;

    @FXML
    private JFXTextField txtRemail;

    @FXML
    private JFXPasswordField txtRloz;

    @FXML
    private JFXButton btnRegis;

    @FXML
    private ImageView slika1;
    
   
     @FXML
    void registriraj(ActionEvent event) {
        String kIme = txtRime.getText();
        String kPrez =txtRprez.getText();
        String kEmail = txtRemail.getText();
        String kLoz = txtRloz.getText();
        /*LocalDate vrijeme = datumReg.getValue();
        DateTimeFormatter formatter = DateTimeFormatter.ofPattern("yyyy-MM-dd");
        String novoVrijeme = vrijeme.format(formatter);*/
        DateFormat dateFormat = new SimpleDateFormat("yyyy-MM-dd");
        Date date = new Date();
        String novoVrijeme = dateFormat.format(date);
       
       if(Korisnik.registriraj(kIme,kPrez,kEmail,kLoz,novoVrijeme))
       try {
                    
                   // Korisnik.salji(kEmail);
                    Parent root;
                    root = FXMLLoader.load(getClass().getClassLoader().getResource("restoran/view/Login.fxml"));
                    Stage stage = new Stage();
                    stage.setScene(new Scene(root));
                    stage.setTitle("Sada se možete prijaviti!");
                    stage.show();
                    slika1.getScene().getWindow().hide();
                } catch (IOException ex) {
                    Logger.getLogger(LoginController.class.getName()).log(Level.SEVERE, null, ex);
                }
            

    }

    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }    
    
}
