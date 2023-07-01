package com.example.examendamianmartinez;

import androidx.appcompat.app.AppCompatActivity;

import android.annotation.SuppressLint;
import android.content.Intent;
import android.graphics.Color;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;

public class MainActivity extends AppCompatActivity {

    TextView MiNombre;
    TextView OcultoRojo;
    EditText UserET;
    EditText PasswordET;
    Button BtnValidacion;
    TextView Requisitos;
    TextView nroIntentos;

    @SuppressLint("MissingInflatedId")
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        Requisitos = findViewById(R.id.NoCumple);
        Requisitos.setVisibility(View.INVISIBLE);
        MiNombre = findViewById(R.id.Nombre);
        UserET = findViewById(R.id.Usuario);
        PasswordET = findViewById(R.id.passw);
        BtnValidacion = findViewById(R.id.BtnValidar);
        nroIntentos = findViewById(R.id.intentos);
        String UsuarioCargado = "DamianMartinez19";
        String PassCargada = "Matecitos";
        String User = String.valueOf(UserET.getText());
        String pass = String.valueOf(PasswordET.getText());
        nroIntentos.setTextColor(Color.RED);
        nroIntentos.setVisibility(View.INVISIBLE);
        BtnValidacion.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                boolean Mayuscula = false;
                boolean NumeroUser = false;
                boolean CumpleUser = false;
                boolean CumplePass = false;
                boolean Passlen = false;
                int Intentos = 4;
                if (User.length() > 6) {
                    for (int i = 0; i < User.length(); i++) {
                        if (Character.isUpperCase(User.charAt(i)) && Character.isDigit(User.charAt(i))) {
                            Mayuscula = true;
                            NumeroUser = true;
                        } else {
                            Requisitos.setVisibility(View.VISIBLE);
                        }
                    }
                }
                if (pass.length() > 8) {
                    Passlen = true;
                } else {
                    Requisitos.setVisibility(View.VISIBLE);
                }
                if (Passlen && Mayuscula && NumeroUser) {
                    CumpleUser = true;
                    CumplePass = true;
                } else {

                }
                if(CumplePass && CumpleUser){
                    if(User == UsuarioCargado &&  pass == PassCargada){
                        Intent i = new Intent();
                        startActivity(i);
                    } else {
                        nroIntentos.setText("La contraseña o el usuario son incorrectos le quedan " + (Intentos-1) + "intentos.");
                        nroIntentos.setVisibility(View.VISIBLE);
                        Intentos = Intentos - 1;
                    }
                }
            }
        });



    }
}