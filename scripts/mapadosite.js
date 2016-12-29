

void setup(){
	size(1000,700);
	background(#EBEBEB);	
}

void draw(){
	strokeWeight(4);
  line(230, 10, 230, 400);
  textSize(22);
  fill(150);
  text("Página principal", 10, 30); 
  fill(0);
  textSize(18);
  noFill();
  //rect(240, 10, 180, 30);
  fill(100);
  text("Barra de navegação", 250, 30);
  strokeWeight(2);
  line(430, 20, 430, 130);
  fill(0);
  noFill();
  //rect(440,10,110,150);
  text("Logo", 450, 30); 
  text("Inicio", 450, 50); 
  text("Galeria", 450, 70); 
  text("Actividades", 450, 90); 
  text("Contactos", 450, 110); 
  text("Login", 450, 130); 
  noFill();
  //rect(240, 135, 180, 30);
  fill(100);
  text("Galeria", 250, 160); 
  noFill();
  //rect(240, 165, 180, 30);
  fill(100);
  text("Sobre nós", 250, 190);
  noFill();
  //rect(240, 205, 180, 30);
  fill(100);
  text("Actividades", 250, 230);
  line(430, 220, 430, 280);
  noFill();
  //rect(440,200, 150,100);
  fill(0);
  text("Teatro e Dança", 450, 230);
  text("Exposições", 450, 250);
  text("Concertos", 450, 270);
  text("Cinema e video", 450, 290);

  noFill();
  //rect(240, 310, 220, 30);
  line(430, 250, 430, 280);
  fill(100);
  text("Opinião dos associados", 250, 330);
  noFill();
  //rect(240, 350, 180, 30);
  fill(100);
  text("Contactos", 250, 370);
  line(430, 360, 430, 400);
  noFill();
  //rect(440,350, 150,75);
  fill(0);
  text("Facebook", 450, 370);
  text("Formulário", 450, 400);

  noFill();
  //rect(240, 420, 180, 30);
  fill(100);
  text("Mapa", 250, 440);
  noFill();
  //rect(240, 460, 180, 30);
  fill(100);
  text("Mapa do site", 250, 480);

 noFill();
  //rect(240, 490, 180, 30);
  fill(100);
  text("Rodapé", 250, 510);
  line(430, 510, 430, 530);
  noFill();
  //rect(440,495, 200,35);
  fill(0);
  text("Programas utilizados", 450, 515);

}


 void mousePressed(){
//primeira parte 
	if(mouseX>240 && mouseX<420 && mouseY>10 && mouseY<40){		//barra de navegação
		link("#m1");			
	}
	//LOGO,inicio,galeria,actividades,contactos,login e registo
	if(mouseX>440 && mouseX<550 && mouseY>10 && mouseY<160){		
	
		link("#m1");			
	}
	
	if(mouseX>240 && mouseX<420 && mouseY>135 && mouseY<165){			//Galeria
		link("#m2");			
	}
	
	if(mouseX>240 && mouseX<420 && mouseY>165 && mouseY<195){		//sobre nós
		link("#m3");			
	}
	
	if(mouseX>240 && mouseX<420 && mouseY>205 && mouseY<235){		//actividades descrição
		link("#m4");			
	}
	
	if(mouseX>440 && mouseX<600 && mouseY>200 && mouseY<350){	//actividades 4 colunas
		link("#m4");			
	}
	
	if(mouseX>240 && mouseX<420 && mouseY>310 && mouseY<340){		//opinião do s associados
		link("#m5");			
	}
	
	if(mouseX>240 && mouseX<550 && mouseY>350 && mouseY<450){		//contactos e mapa
		link("#m6");			
	}
	
	if(mouseX>240 && mouseX<550 && mouseY>490 && mouseY<520){	//rodapé e programas utilizados
		link("#m7");			
	}
	
	
}




		
