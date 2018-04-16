/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package restoran.controller;

import java.io.IOException;
import java.net.URL;
import java.sql.SQLException;
import java.util.ResourceBundle;
import java.util.concurrent.TimeUnit;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Label;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.stage.Stage;
import restoran.model.NaruciModel;

/**
 * FXML Controller class
 *
 * @author ivanm
 */
public class NarudžbeController implements Initializable {

    /**
     * Initializes the controller class.
    */
    
    @FXML
    private TableView narudzbeTbl;

    @FXML
    private TableColumn idCol;

    @FXML
    private TableColumn imeCol;

    @FXML
    private TableColumn datumCol;

    @FXML
    private TableColumn cijenaCol;
    
     
      
    NaruciModel nm;

  
    
     @FXML
    void osvjezi(ActionEvent event) {
        ObservableList<NaruciModel> data = NaruciModel.NaruciLista();
        imeCol.setCellValueFactory(new PropertyValueFactory<NaruciModel, String>("naziv"));
        datumCol.setCellValueFactory(new PropertyValueFactory<NaruciModel, String>("datum"));
        cijenaCol.setCellValueFactory(new PropertyValueFactory<NaruciModel, String>("cijena"));
        narudzbeTbl.setItems(data);

    }
    
    @FXML
    void nazad(ActionEvent event){
        Parent root;
        try {
            root = FXMLLoader.load(getClass().getClassLoader().getResource("restoran/view/Administracija.fxml"));
            Stage stage = new Stage();
            stage.setScene(new Scene(root));
            stage.show();
            narudzbeTbl.getScene().getWindow().hide();
            stage.setTitle("dobro došli admine");
        } catch (IOException ex) {
            Logger.getLogger(NarudžbeController.class.getName()).log(Level.SEVERE, null, ex);
        }
            
    }
    
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
        
    }    

   
    
}
