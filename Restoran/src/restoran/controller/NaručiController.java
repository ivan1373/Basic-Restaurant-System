/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package restoran.controller;

import com.jfoenix.controls.JFXCheckBox;
import com.jfoenix.controls.JFXDatePicker;
import com.jfoenix.controls.JFXTextField;
import java.io.IOException;
import java.net.URL;
import java.text.DateFormat;
import java.text.SimpleDateFormat;
import java.time.LocalDate;
import java.time.format.DateTimeFormatter;
import java.util.Date;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Alert;
import javafx.scene.control.Alert.AlertType;
import javafx.scene.control.ChoiceBox;
import javafx.scene.control.Label;
import javafx.scene.control.Spinner;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.input.MouseEvent;
import javafx.stage.Stage;
import restoran.model.MeniModel;
import restoran.model.NaruciModel;

/**
 * FXML Controller class
 *
 * @author ivanm
 */
public class NaručiController implements Initializable {

    /**
     * Initializes the controller class.
     */
    
    

    @FXML
    private TableView tblMeni0;

    @FXML
    private TableColumn colNaziv0;

    @FXML
    private TableColumn colVrsta0;

    @FXML
    private TableColumn colCijena0;

    @FXML
    private JFXTextField txtNaziv;

    @FXML
    private JFXTextField txtVrsta;

    @FXML
    private JFXTextField txtcijena;

    @FXML
    private JFXTextField txtKol;

    @FXML
    private JFXCheckBox placanje1;

    @FXML
    private JFXCheckBox placanje2;

    @FXML
    private Label cijena;
      
    MeniModel odabraniMeni;
    
     @FXML
    void odaberiprvi(MouseEvent event) {
        this.odabraniMeni = (MeniModel)
        this.tblMeni0.getSelectionModel().getSelectedItem();
        this.txtNaziv.setText(this.odabraniMeni.getNaziv());
        this.txtVrsta.setText(this.odabraniMeni.getVrsta());
        this.txtcijena.setText(Integer.toString(this.odabraniMeni.getCijena()));
    }
    

    @FXML
    void odustani(ActionEvent event) {
        try {
            Parent root;
            root = FXMLLoader.load(getClass().getClassLoader().getResource("restoran/view/Sucelje.fxml"));
            Stage stage = new Stage();
            stage.setScene(new Scene(root));
            stage.show();
            txtNaziv.getScene().getWindow().hide();
        } catch (IOException ex) {
            Logger.getLogger(StartController.class.getName()).log(Level.SEVERE, null, ex);
        }

    }

    

   

    @FXML
    void naruci(ActionEvent event) {
        
        String naziv = this.txtNaziv.getText();
        String vrsta = this.txtVrsta.getText();
        Integer kolicina = Integer.parseInt(this.txtKol.getText());
        Integer cijena = Integer.parseInt(this.txtcijena.getText());
        Integer nova_cijena = kolicina * cijena;
        DateFormat dateFormat = new SimpleDateFormat("yyyy-MM-dd");
        Date date = new Date();
        String novoVrijeme = dateFormat.format(date);
       /* DateFormat dateFormat = new SimpleDateFormat("yyyy-MM-dd");
        Date date = new Date();
        String novoVrijeme = dateFormat.format(date);
        /**/
        if(placanje2.isSelected())
        {
            nova_cijena = nova_cijena*2;
        }
        NaruciModel novi = new NaruciModel (0, naziv, vrsta, kolicina, nova_cijena, novoVrijeme);
        novi.spasi();
        Alert alert = new Alert(AlertType.WARNING);
        alert.setTitle("Informacije o narudzbi");
        alert.setHeaderText("INFO");
        alert.setContentText("Narudzba uspjesna! Pripremite " + nova_cijena + "$.");

        alert.showAndWait();

    }
    
   
    
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
        ObservableList<MeniModel> data = MeniModel.MeniLista();
        colNaziv0.setCellValueFactory(new PropertyValueFactory<MeniModel, String>("naziv"));
        colVrsta0.setCellValueFactory(new PropertyValueFactory<MeniModel, String>("vrsta"));
        colCijena0.setCellValueFactory(new PropertyValueFactory<MeniModel, String>("cijena"));
        tblMeni0.setItems(data);
    }    
    
}
