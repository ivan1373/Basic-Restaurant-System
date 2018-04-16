/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package restoran.controller;

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
import javafx.scene.layout.AnchorPane;
import javafx.stage.Stage;

/**
 * FXML Controller class
 *
 * @author ivanm
 */
public class AdministracijaController implements Initializable {

    /**
     * Initializes the controller class.
     */
     @FXML
    private AnchorPane sss;
    
     @FXML
    void odjavise(ActionEvent event) {
        try {
            Parent root;
            root = FXMLLoader.load(getClass().getClassLoader().getResource("restoran/view/Start.fxml"));
            Stage stage = new Stage();
            stage.setScene(new Scene(root));
            stage.show();
            sss.getScene().getWindow().hide();
        } catch (IOException ex) {
            Logger.getLogger(StartController.class.getName()).log(Level.SEVERE, null, ex);
        }

    }

    @FXML
    void otvoriMeni(ActionEvent event) {
        
        try {
            Parent root;
            root = FXMLLoader.load(getClass().getClassLoader().getResource("restoran/view/Meni.fxml"));
            Stage stage = new Stage();
            stage.setScene(new Scene(root));
            stage.show();
            sss.getScene().getWindow().hide();
        } catch (IOException ex) {
            Logger.getLogger(StartController.class.getName()).log(Level.SEVERE, null, ex);
        }

    }

    @FXML
    void otvoriNarudzbe(ActionEvent event) {
        
        try {
            Parent root;
            root = FXMLLoader.load(getClass().getClassLoader().getResource("restoran/view/Narudzbe.fxml"));
            Stage stage = new Stage();
            stage.setScene(new Scene(root));
            stage.show();
            sss.getScene().getWindow().hide();
        } catch (IOException ex) {
            Logger.getLogger(StartController.class.getName()).log(Level.SEVERE, null, ex);
        }

    }
    
     @FXML
    void otvori_upr(ActionEvent event) {
        
        try {
            Parent root;
            root = FXMLLoader.load(getClass().getClassLoader().getResource("restoran/view/upravljanje.fxml"));
            Stage stage = new Stage();
            stage.setScene(new Scene(root));
            stage.show();
            sss.getScene().getWindow().hide();
        } catch (IOException ex) {
            Logger.getLogger(StartController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }
    
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }    
    
}
