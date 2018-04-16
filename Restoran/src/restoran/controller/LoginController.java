/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package restoran.controller;

import java.net.URL;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Label;
import com.jfoenix.controls.JFXButton;
import com.jfoenix.controls.JFXCheckBox;
import com.jfoenix.controls.JFXPasswordField;
import com.jfoenix.controls.JFXTextField;
import com.sun.javaws.Main;
import java.io.IOException;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.Statement;
import java.util.concurrent.TimeUnit;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Alert;
import javafx.scene.image.ImageView;
import javafx.scene.layout.FlowPane;
import javafx.scene.paint.Color;
import javafx.stage.Modality;
import javafx.stage.Stage;
import javafx.stage.StageStyle;
import restoran.model.Korisnik;


/**
 *
 * @author ivanm
 */
public class LoginController implements Initializable {
    
    PreparedStatement pst;
    ResultSet rs;
    Connection conn;
    
   
    @FXML
    private JFXCheckBox check;
    
    @FXML
    private JFXTextField txtKime;

    @FXML
    private JFXPasswordField txtLozinka;

    @FXML
    private JFXButton btnPrijavise;
    
    @FXML
    private ImageView slika2;
    
    @FXML
    private Label output;
    
     
    
  public String getIme(){
      return txtKime.getText();
  }
  
    @FXML
    public void prijavise (ActionEvent e) throws Exception{
        String kime = txtKime.getText();
        String lozinka = txtLozinka.getText();
        if(check.isSelected()){
            //output.setText("Uspješno ste se prijavili admine!");
            TimeUnit.SECONDS.sleep(4);
            Parent root;
            root = FXMLLoader.load(getClass().getClassLoader().getResource("restoran/view/Administracija.fxml"));
            Stage stage = new Stage();
            stage.setScene(new Scene(root));
            stage.show();
            output.getScene().getWindow().hide();
            stage.setTitle("dobro došli admine");
            
            Alert alert = new Alert(Alert.AlertType.INFORMATION);
            alert.setTitle("Informacije o korisniku");
            alert.setHeaderText("INFO");
            alert.setContentText("Prijava uspjesna! Dobrodošli admine!");

            alert.showAndWait();
        }
        else{
            if (kime.equals("") || lozinka.equals(""))
            {
                Alert alert = new Alert(Alert.AlertType.WARNING);
                
                 alert.setTitle("Informacije o prijavi");
                 alert.setHeaderText("UPOZORENJE");
                 alert.setContentText("Morate unijeti sve vrijednosti!");
                 alert.showAndWait();
                txtKime.setText("");
                txtLozinka.setText("");
            }
            else{
                if (Korisnik.logiraj(kime, lozinka)) {
                try {
                                                         
                    TimeUnit.SECONDS.sleep(4);
                    Parent root;
                    root = FXMLLoader.load(getClass().getClassLoader().getResource("restoran/view/Sucelje.fxml"));
                    Stage stage = new Stage();
                    stage.setScene(new Scene(root));
                    stage.show();
                    output.getScene().getWindow().hide();
                    stage.setTitle("dobro došli " + kime);
                    
                    Alert alert = new Alert(Alert.AlertType.INFORMATION);
                    alert.setTitle("Informacije o korisniku");
                    alert.setHeaderText("INFO");
                    alert.setContentText("Prijava uspjesna! Dobrodošli " + kime + "!");

                    alert.showAndWait();
                  
                 
                    
                } catch (IOException ex) {
                    Logger.getLogger(LoginController.class.getName()).log(Level.SEVERE, null, ex);
                }
            } else {
                Alert alert = new Alert(Alert.AlertType.WARNING);
                
                    alert.setTitle("Informacije o prijavi");
                    alert.setHeaderText("UPOZORENJE");
                    alert.setContentText("Prijava neuspjesna! Podaci su neispravni!");
                    alert.showAndWait();
                txtKime.setText("");
                txtLozinka.setText("");
            }
                
            }
        }
    }
    
     
        
        
    
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }    
    
}
