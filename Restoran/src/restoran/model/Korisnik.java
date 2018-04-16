/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package restoran.model;

/*import java.util.*;
import javax.mail.*;
import javax.mail.internet.*;
import javax.activation.*;*/
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
public class Korisnik {
    
    SimpleIntegerProperty sifra = new SimpleIntegerProperty();
    SimpleStringProperty ime = new SimpleStringProperty();
    SimpleStringProperty prezime = new SimpleStringProperty();
    SimpleStringProperty email = new SimpleStringProperty();
    SimpleStringProperty lozinka = new SimpleStringProperty();
    SimpleStringProperty datum_reg = new SimpleStringProperty();

    public Korisnik(Integer sifra, String ime, String prezime, String email, String lozinka, String datum) {
        this.sifra = new SimpleIntegerProperty(sifra);
        this.ime = new SimpleStringProperty(ime);
        this.prezime = new SimpleStringProperty(prezime);
        this.email = new SimpleStringProperty(email);
        this.lozinka = new SimpleStringProperty(lozinka);
        this.datum_reg =new SimpleStringProperty(datum);
    
    
    }
    public String getIme() {
        return ime.get();
    }

    public void setIme(String ime) {
        this.ime = new SimpleStringProperty(ime);
    }

    public String getPrezime() {
        return prezime.get();
    }

    public void setPrezime(String prezime) {
        this.prezime =  new SimpleStringProperty(prezime);
    }

    public String getEmail() {
        return email.get();
    }

    public void setEmail(String email) {
        this.email =  new SimpleStringProperty(email);
    }

    public String getLozinka() {
        return lozinka.get();
    }

    public void setLozinka(String lozinka) {
        this.lozinka =  new SimpleStringProperty(lozinka);
    }
    
    
    
    public String getDatum_reg() {
        return datum_reg.get();
    }

    public void setDatum_reg(String datum) {
        this.ime = new SimpleStringProperty(datum);
    }
    
    public Integer getSifra() {
        return sifra.get();
    }
    
    public void setSifra(Integer sifra){
        this.sifra = new SimpleIntegerProperty(sifra);
    }
    
/*public static void salji(String mail)
{
    String to = mail;     
    String from = "no-reply@ivan.mail.com";     
    String host = "localhost";   
    Properties properties = System.getProperties();
    properties.setProperty("mail.smtp.host", host);
    properties.setProperty("mail.smtp.password", "password");
    properties.setProperty("mail.smtp.port", "25");
    properties.setProperty("mail.smtp.auth", "false");
    Session session = Session.getDefaultInstance(properties);
    try {
         MimeMessage message = new MimeMessage(session);
         message.setFrom(new InternetAddress(from));
         message.addRecipient(Message.RecipientType.TO, new InternetAddress(to));
         message.setSubject("Programska podrška za narudžbe u ugostiteljskim objektima");
         message.setText("DobroDošli novi korisniče!");
         Transport.send(message);
         System.out.println("Poruka uspješno poslana....");
      } catch (MessagingException mex) {
         mex.printStackTrace();
      }
   

}
    */
    public void uredi () {
 try {
 PreparedStatement upit = Baza.DB.exec("UPDATE korisnik SET ime=?, prezime=?, email=?,lozinka=? WHERE id=?");

 upit.setString(1, this.getIme());
 upit.setString(2, this.getPrezime());
 upit.setString(3, this.getEmail());
 upit.setString(4, this.getLozinka());
 
 upit.setInt(5, this.getSifra());

 upit.executeUpdate();
 } catch (SQLException ex) {
 System.out.println("Greška prilikom izmjene korisnikičkih podataka u bazu:" + ex.getMessage());

 }
 }
 
 public void brisi () {
 try {
 PreparedStatement upit = Baza.DB.exec("DELETE FROM korisnik WHERE id=?");

 upit.setInt(1, this.getSifra());
 upit.executeUpdate();
 
 } catch (SQLException ex) {
 System.out.println("Greška prilikom brisanja korisnikičkih podataka iz baze:" + ex.getMessage());
 

 }}
    
    public static boolean logiraj (String kime, String lozinka) {
        Baza db = new Baza();
        PreparedStatement ps = db.exec("SELECT * FROM korisnik WHERE ime =? AND lozinka=?");
        try {
            ps.setString(1, kime);
            ps.setString(2, lozinka);
            ResultSet rs = ps.executeQuery();
            if (rs.next()) {
                return true;
            } else {
                return false;
            }
        } catch (SQLException ex) {
            System.out.println("Nastala je greška: "+ex.getMessage());
            return false;
        }
    }
    
    public static boolean registriraj (String kime, String prezime, String email, String lozinka, String datum) {
        Baza db = new Baza();
        
        try {
            PreparedStatement ps = db.exec("INSERT INTO korisnik (id, ime, prezime, email, lozinka, datum_reg) VALUES (null, ?, ?, ?, ?,?)");
            ps.setString(1, kime);
            ps.setString(2, prezime);
            ps.setString(3, email);
            ps.setString(4, lozinka);
            ps.setString(5, datum);
            ps.executeUpdate();
            return true;
            
        } catch (SQLException ex) {
            System.out.println("Nastala je greška: "+ex.getMessage());
            return false;
        }
    }
    
    
    
    public static ObservableList<Korisnik> listaKorisnika() {
        ObservableList<Korisnik> lista = FXCollections.observableArrayList();
        
        ResultSet rs = Baza.DB.select("SELECT * FROM korisnik");
        
        try {
            while (rs.next()) {
                lista.add(new Korisnik(rs.getInt("id"), rs.getString("ime"), rs.getString("prezime"), rs.getString("email"),rs.getString("lozinka"),rs.getString("datum_reg")));
            }
        } catch (SQLException ex) {
            System.out.println("Nastala je greška prilikom iteriranja: " + ex.getMessage());
        }
        return lista;
    }
    
}
