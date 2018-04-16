/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package restoran.model;

import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.beans.property.SimpleBooleanProperty;
//import javafx.beans.property.SimpleDoubleProperty;
import javafx.beans.property.SimpleIntegerProperty;
import javafx.beans.property.SimpleStringProperty;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;

/**
 *
 * @author ivanm
 */
public class NaruciModel {
    
    SimpleStringProperty naziv = new SimpleStringProperty();
    SimpleStringProperty vrsta = new SimpleStringProperty();
    SimpleIntegerProperty kolicina = new SimpleIntegerProperty();
    SimpleIntegerProperty cijena = new SimpleIntegerProperty();
    SimpleIntegerProperty sifra = new SimpleIntegerProperty();
    SimpleStringProperty datum = new SimpleStringProperty();
    
    

    public NaruciModel(Integer sifra, String naziv, String vrsta, Integer kolicina, Integer cijena, String datum) {
        this.sifra = new SimpleIntegerProperty(sifra);
        this.naziv = new SimpleStringProperty(naziv);
        this.vrsta = new SimpleStringProperty(vrsta);
        this.kolicina = new SimpleIntegerProperty(kolicina);
        this.cijena = new SimpleIntegerProperty(cijena);
        this.datum = new SimpleStringProperty(datum);
       
    }
    
    
    public Integer getSifra() {
        return sifra.get();
    }

    public void setSifra(Integer sifra) {
        this.sifra = new SimpleIntegerProperty(sifra);
    }

    public String getDatum() {
        return datum.get();
    }

    public void setDatum(String datum) {
        this.datum = new SimpleStringProperty(datum);
    }
    
    
    public String getNaziv() {
        return naziv.get();
    }

    public void setNaziv(String naziv) {
        this.naziv = new SimpleStringProperty(naziv);
    }

    public String getVrsta() {
        return vrsta.get();
    }

    public void setVrsta(String vrsta) {
        this.vrsta = new SimpleStringProperty(vrsta);
    }

    public Integer getKolicina() {
        return kolicina.get();
    }

    public void setKolicina(Integer kolicina) {
        this.kolicina =new SimpleIntegerProperty(kolicina);
    }

    public Integer getCijena() {
        return cijena.get();
    }

    public void setCijena(Integer cijena) {
        this.cijena = new SimpleIntegerProperty(cijena);
    }

   /* public String getDatum() {
        return datum.get();
    }

    public void setDatum(SimpleStringProperty datum) {
        this.datum = datum;
    }*/
    
 
 /*public Integer suma(){
             try {
            PreparedStatement upit = Baza.DB.exec("SELECT SUM(cijena) from korisnik");
            upit.executeUpdate();
        } catch (SQLException ex) {
            Logger.getLogger(NaruciModel.class.getName()).log(Level.SEVERE, null, ex);
        }
     return 0;
 }*/
    
    public void spasi () {
 try {
 PreparedStatement upit = Baza.DB.exec("INSERT INTO narudzba VALUES(null,?,?,?,?,?)");

 upit.setString(1, this.getNaziv());
 upit.setString(2, this.getVrsta());
 upit.setInt(3, this.getKolicina());
 upit.setDouble(4, this.getCijena());
 upit.setString(5, this.getDatum());
 upit.executeUpdate();
 } catch (SQLException ex) {
 System.out.println("Greška prilikom spasavanja hrane/pića u bazu:" + ex.getMessage());

 }
 }
    
    
    
    public void uredi () {
 try {
 PreparedStatement upit = Baza.DB.exec("UPDATE narudzba SET naziv=?,vrsta=?, kolicina=?, cijena=?, datum=? WHERE id=?");

 upit.setString(1, this.getNaziv());
 upit.setString(2, this.getVrsta());
 upit.setInt(3, this.getKolicina());
 upit.setDouble(4, this.getCijena());
 upit.setString(5, this.getDatum());
 upit.setInt(6, this.getSifra());
 upit.executeUpdate();
 } catch (SQLException ex) {
 System.out.println("Greška prilikom spasavanja hrane/pića u bazu:" + ex.getMessage());

 }
 }
    
    public static ObservableList<NaruciModel> NaruciLista () {
        ObservableList<NaruciModel> lista = FXCollections.observableArrayList();
        
        ResultSet rs = Baza.DB.select("SELECT * FROM narudzba");
        
        try {
            while (rs.next()) {
                lista.add(new NaruciModel(rs.getInt("id"), rs.getString("naziv"), rs.getString("vrsta"),
                        rs.getInt("kolicina"),rs.getInt("cijena"), rs.getString("datum")));
            }
        } catch (SQLException ex) {
            System.out.println("Nastala je greška prilikom iteriranja: " + ex.getMessage());
        }
        return lista;
    }
    
}
