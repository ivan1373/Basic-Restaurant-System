/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package restoran.controller;


import com.jfoenix.controls.JFXTextField;
import java.io.IOException;
import java.net.URL;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.event.Event;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Alert;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.input.MouseEvent;
import javafx.stage.Stage;
import restoran.model.Korisnik;

/**
 * FXML Controller class
 *
 * @author ivanm
 */
public class UpravljanjeController implements Initializable {

    /**
     * Initializes the controller class.
     */
    
    @FXML
    private TableView tabela;
    
    @FXML
    private TableColumn imetbl;

    @FXML
    private TableColumn prezimetbl;

    @FXML
    private TableColumn emailtbl;

    @FXML
    private TableColumn lozinkatbl;

    @FXML
    private TableColumn datumtbl;

    @FXML
    private JFXTextField name;

    @FXML
    private JFXTextField surname;

    @FXML
    private JFXTextField mail;

    @FXML
    private JFXTextField pass;
    
    Korisnik kor;
    
    
    @FXML
    void izdvoji(Event event) {
        this.kor = (Korisnik)
        this.tabela.getSelectionModel().getSelectedItem();
        this.name.setText(this.kor.getIme());
        this.surname.setText(this.kor.getPrezime());
        this.mail.setText(this.kor.getEmail());
        this.pass.setText(this.kor.getLozinka());

    }
    
    @FXML
    void izbrisi(ActionEvent event) {
        if (this.kor != null) {
        this.kor.brisi();
        }
        Alert alert = new Alert(Alert.AlertType.WARNING);
        alert.setTitle("Informacije o naredbi");
        alert.setHeaderText("INFO");
        alert.setContentText("Korisnik IZBRISAN iz baze podataka!");
        alert.showAndWait();
        ObservableList<Korisnik> data = Korisnik.listaKorisnika();
        this.tabela.setItems(data);
    }

    
    @FXML
    void izmijeni(ActionEvent event) {
        this.kor.setIme(this.name.getText());
        this.kor.setPrezime(this.surname.getText());
        this.kor.setEmail(this.mail.getText());
        this.kor.setLozinka(this.pass.getText());
        this.kor.uredi();
        Alert alert = new Alert(Alert.AlertType.INFORMATION);
        alert.setTitle("Informacije o naredbi");
        alert.setHeaderText("INFO");
        alert.setContentText("Izmjena korisničkih podataka uspjesna!");

        alert.showAndWait();
        ObservableList<Korisnik> data = Korisnik.listaKorisnika();
        this.tabela.setItems(data);

    }
    
    @FXML
    void nazad(ActionEvent event) {
        
        try {
            Parent root;
            root = FXMLLoader.load(getClass().getClassLoader().getResource("restoran/view/Administracija.fxml"));
            Stage stage = new Stage();
            stage.setScene(new Scene(root));
            stage.show();
            pass.getScene().getWindow().hide();
        } catch (IOException ex) {
            Logger.getLogger(StartController.class.getName()).log(Level.SEVERE, null, ex);
        }
        
    }
    
    
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
        ObservableList<Korisnik> data = Korisnik.listaKorisnika();
        imetbl.setCellValueFactory(new PropertyValueFactory<Korisnik, String>("ime"));
        prezimetbl.setCellValueFactory(new PropertyValueFactory<Korisnik, String>("prezime"));
        emailtbl.setCellValueFactory(new PropertyValueFactory<Korisnik, String>("email"));
        lozinkatbl.setCellValueFactory(new PropertyValueFactory<Korisnik, String>("lozinka"));
        datumtbl.setCellValueFactory(new PropertyValueFactory<Korisnik, String>("datum_reg"));
        tabela.setItems(data);
    }    
    
}
