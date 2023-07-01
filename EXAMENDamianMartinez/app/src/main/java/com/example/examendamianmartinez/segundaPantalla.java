package com.example.examendamianmartinez;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.widget.Button;
import android.widget.EditText;

public class segundaPantalla extends AppCompatActivity {
    EditText Pass;
    EditText ConfirmPass;
    Button CambiarPass;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_segunda_pantalla);
        Pass = findViewById(R.id.newPass);
        ConfirmPass = findViewById(R.id.confPass);
        CambiarPass = findViewById(R.id.cambiar);
    }
}