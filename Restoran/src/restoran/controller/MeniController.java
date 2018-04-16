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
import javafx.print.PrinterJob;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Alert;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.input.MouseEvent;
import javafx.stage.Stage;
import restoran.model.MeniModel;

/**
 * FXML Controller class
 *
 * @author ivanm
 */
public class MeniController implements Initializable {

    /**
     * Initializes the controller class.
     */
    
    @FXML
    private TableView MeniTbl;

    @FXML
    private TableColumn nazivTblCol;

    @FXML
    private TableColumn vrstaTblCol;

    @FXML
    private TableColumn cijenaTblCol;
    
    @FXML
    private JFXTextField nazivMeni;

    @FXML
    private JFXTextField vrstaMeni;

    @FXML
    private JFXTextField cijenaMeni;
    
    MeniModel odabraniMeni;
    
    
    
    @FXML
    void odaberiMeni(Event event) {
        this.odabraniMeni = (MeniModel)
        this.MeniTbl.getSelectionModel().getSelectedItem();
        this.nazivMeni.setText(this.odabraniMeni.getNaziv());
        this.vrstaMeni.setText(this.odabraniMeni.getVrsta());
        this.cijenaMeni.setText(Integer.toString(this.odabraniMeni.getCijena()));

    }
    
    @FXML
    void brisiMeni(ActionEvent event) {
        if (this.odabraniMeni != null) {
        this.odabraniMeni.brisi();
        }
        Alert alert = new Alert(Alert.AlertType.WARNING);
        alert.setTitle("Informacije o naredbi");
        alert.setHeaderText("UPOZORENJE!");
        alert.setContentText("Hrana/piće uspješno izbrisano!");

        alert.showAndWait();
        ObservableList<MeniModel> data = MeniModel.MeniLista();
        this.MeniTbl.setItems(data);
    }


    @FXML
    void dodajMeni(ActionEvent event) {
        String naziv = this.nazivMeni.getText();
        String vrsta = this.vrstaMeni.getText();
        Integer cijena = Integer.parseInt(this.cijenaMeni.getText());
        MeniModel novi = new MeniModel (0, naziv, vrsta, cijena);
    novi.spasi();
    Alert alert = new Alert(Alert.AlertType.INFORMATION);
        alert.setTitle("Informacije o naredbi");
        alert.setHeaderText("INFO");
        alert.setContentText("Jelo/piće uspješno dodano");

        alert.showAndWait();
        ObservableList<MeniModel> data = MeniModel.MeniLista();
    this.MeniTbl.setItems(data);

    

    }

    
    @FXML
    void urediMeni(Event event) {
        this.odabraniMeni.setNaziv(this.nazivMeni.getText());
        this.odabraniMeni.setVrsta(this.vrstaMeni.getText());
        this.odabraniMeni.setCijena(Integer.parseInt(this.cijenaMeni.getText()));
        this.odabraniMeni.uredi();
        Alert alert = new Alert(Alert.AlertType.INFORMATION);
        alert.setTitle("Informacije o naredbi");
        alert.setHeaderText("INFO");
        alert.setContentText("Izmjena informacija o hrani/piću uspjesna!");

        alert.showAndWait();
        ObservableList<MeniModel> data = MeniModel.MeniLista();
        this.MeniTbl.setItems(data);
    }
    
      @FXML
    void povratak(ActionEvent event) {
        try {
            Parent root;
            root = FXMLLoader.load(getClass().getClassLoader().getResource("restoran/view/Administracija.fxml"));
            Stage stage = new Stage();
            stage.setScene(new Scene(root));
            stage.show();
            vrstaMeni.getScene().getWindow().hide();
        } catch (IOException ex) {
            Logger.getLogger(StartController.class.getName()).log(Level.SEVERE, null, ex);
        }

    }
    
     @FXML
    void printaj(ActionEvent event) {
      PrinterJob job = PrinterJob.createPrinterJob();
      if(job != null)
      {
        job.printPage(this.MeniTbl);
        job.endJob();
      }

    }

    
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
        ObservableList<MeniModel> data = MeniModel.MeniLista();
        nazivTblCol.setCellValueFactory(new PropertyValueFactory<MeniModel, String>("naziv"));
        vrstaTblCol.setCellValueFactory(new PropertyValueFactory<MeniModel, String>("vrsta"));
        cijenaTblCol.setCellValueFactory(new PropertyValueFactory<MeniModel, String>("cijena"));
        MeniTbl.setItems(data);
    }    
    
}
