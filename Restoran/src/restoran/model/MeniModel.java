/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package restoran.model;

import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import javafx.beans.property.SimpleIntegerProperty;
import javafx.beans.property.SimpleStringProperty;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;

/**
 *
 * @author ivanm
 */
public class MeniModel {

    public void setCijena(Integer cijena) {
        this.cijena = new SimpleIntegerProperty(cijena);
    }

    public void setNaziv(String naziv) {
        this.naziv = new SimpleStringProperty(naziv);
    }

    public void setVrsta(String vrsta) {
        this.vrsta = new SimpleStringProperty(vrsta);
    }

   
    
    SimpleIntegerProperty cijena = new SimpleIntegerProperty();
    SimpleStringProperty naziv = new SimpleStringProperty();
    SimpleStringProperty vrsta = new SimpleStringProperty();
    SimpleIntegerProperty sifra = new SimpleIntegerProperty();
    
    public MeniModel (Integer sifra, String naziv, String vrsta, Integer cijena) {
        this.sifra = new SimpleIntegerProperty (sifra);
        this.naziv = new SimpleStringProperty(naziv);
        this.vrsta = new SimpleStringProperty(vrsta);
        this.cijena = new SimpleIntegerProperty(cijena);
    }

    public Integer getCijena() {
        return cijena.get();
    }

    public String getNaziv() {
        return naziv.get();
    }

    public String getVrsta() {
        return vrsta.get();
    }
    
    public Integer getSifra() {
        return sifra.get();
    }
    
    public void spasi () {
 try {
 PreparedStatement upit = Baza.DB.exec("INSERT INTO meni VALUES(null,?,?,?)");

 upit.setString(1, this.getNaziv());
 upit.setString(2, this.getVrsta());
 upit.setInt(3, this.getCijena());
 upit.executeUpdate();
 } catch (SQLException ex) {
 System.out.println("Greška prilikom spasavanja hrane/pića u bazu:" + ex.getMessage());

 }
 }
    
    public void uredi () {
 try {
 PreparedStatement upit = Baza.DB.exec("UPDATE meni SET naziv=?, opis=?, cijena=? WHERE id=?");

 upit.setString(1, this.getNaziv());
 upit.setString(2, this.getVrsta());
 upit.setInt(3, this.getCijena());
 upit.setInt(4, this.getSifra());
 upit.executeUpdate();
 } catch (SQLException ex) {
 System.out.println("Greška prilikom spasavanja hrane/pića u bazu:" + ex.getMessage());

 }
 }
    
    public void brisi () {
 try {
 PreparedStatement upit = Baza.DB.exec("DELETE FROM meni WHERE id=?");

 upit.setInt(1, this.getSifra());
 upit.executeUpdate();
 
 } catch (SQLException ex) {
 System.out.println("Greška brisanja hrane/pića iz baze:" + ex.getMessage());
 

 }}
    
     
    
    
    public static ObservableList<MeniModel> MeniLista () {
        ObservableList<MeniModel> lista = FXCollections.observableArrayList();
        
        ResultSet rs = Baza.DB.select("SELECT * FROM meni");
        
        try {
            while (rs.next()) {
                lista.add(new MeniModel(rs.getInt("id"), rs.getString("naziv"), rs.getString("opis"), rs.getInt("cijena")));
            }
        } catch (SQLException ex) {
            System.out.println("Nastala je greška prilikom iteriranja: " + ex.getMessage());
        }
        return lista;
    }
    
}
