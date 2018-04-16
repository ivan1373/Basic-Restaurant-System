/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package restoran.controller;

//import restoran.controller.LoginController;
import java.io.IOException;
import java.net.URL;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Label;
import javafx.stage.Stage;
import restoran.model.Korisnik;

/**
 * FXML Controller class
 *
 * @author ivanm
 */
public class SuceljeController implements Initializable {

    /**
     * Initializes the controller class.
     */
    
    //final static Korisnik;
    
    @FXML
    private Label vaseIme;
    
    @FXML
    private Label vaseIme1;
    
    //String ime = LoginController.getName();
    
    @FXML
    void pokazi(ActionEvent event) {
       // vaseIme1.setText(ime);

    }
    
      @FXML
    void odjava(ActionEvent event) {
        try {
            Parent root;
            root = FXMLLoader.load(getClass().getClassLoader().getResource("restoran/view/Start.fxml"));
            Stage stage = new Stage();
            stage.setScene(new Scene(root));
            stage.show();
            vaseIme1.getScene().getWindow().hide();
        } catch (IOException ex) {
            Logger.getLogger(StartController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    @FXML
    void otvoriNar(ActionEvent event) {
        try {
            Parent root;
            root = FXMLLoader.load(getClass().getClassLoader().getResource("restoran/view/Naruci.fxml"));
            Stage stage = new Stage();
            stage.setScene(new Scene(root));
            stage.show();
            vaseIme1.getScene().getWindow().hide();
        } catch (IOException ex) {
            Logger.getLogger(StartController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }
    
      @FXML
    void vidi(ActionEvent event) {
        try {
            Parent root;
            root = FXMLLoader.load(getClass().getClassLoader().getResource("restoran/view/About.fxml"));
            Stage stage = new Stage();
            stage.setScene(new Scene(root));
            stage.show();
            vaseIme1.getScene().getWindow().hide();
        } catch (IOException ex) {
            Logger.getLogger(StartController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }
    
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
       
    }    

   
    
}
