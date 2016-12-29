float segundos;
PFont font;
int flag=0;

void setup() {
  size(600, 100);
  background(200);
  font = loadFont("letra2.vlw");
   
}


void draw() {
 segundos=second();
 if (((mouseX >0) && (mouseX <600)) && ((mouseY >0) && (mouseY <100))) {

    background(#84C9C0);

   
    pushMatrix();
    translate(200, 5);
    scale(0.3);
    ellipse(100, 100, 120, 120);
    fill(0);
    ellipse(100, 100, 100, 100);
    fill(#868686);
    ellipse(100, 100, 30, 30);
    ellipse(100, 70, 15, 15);
    ellipse(130, 100, 15, 15);
    ellipse(100, 130, 15, 15);
    ellipse(70, 100, 15, 15);
    ellipse(80, 80, 15, 15);
    ellipse(120, 80, 15, 15);
    ellipse(120, 120, 15, 15);
    ellipse(80, 120, 15, 15);
    strokeWeight(5);
    line(150, 140, 180, 150);
    popMatrix();

    pushMatrix();
   
    translate(200, 5);
    scale(0.3);
    fill(0);
    ellipse(410, 60, 40, 40);
    ellipse(410, 120, 10, 85);
    triangle(375, 115, 410, 100, 445, 115);
    strokeWeight(9);
    line(418, 115, 440, 155);
    line(375, 70, 410, 100);
    line(410, 100, 445, 70);
    
    popMatrix();

    pushMatrix();
    translate(200, 5);
    scale(0.3);
    fill(0);
    rect(170, 40, 100, 120);
    fill(#B2B2B2);
    rect(175, 45, 90, 110);
    fill(#524F4F);
    ellipse(220, 90, 60, 80);
    fill(0);
    triangle(220, 95, 172, 155, 270, 155);
    ellipse(220, 80, 40, 50);
    popMatrix();

    pushMatrix();
    translate(200, 5);
    scale(0.3);
    
    noStroke();
    fill(255);
    rect(272, 40, 100, 50);
    ellipse(322, 100, 100, 120);
    fill(#4B4A4A);
    strokeWeight(6);
    ellipse(295, 80, 30, 20);
    ellipse(349, 80, 30, 20);
    arc(322, 115, 60, 50, PI*2, PI*3);
    popMatrix();

   
    textFont(font, 30);
    text("Casa do Povo", 200, 80);
    fill(0);
  
  }
 else{
 if (segundos>0 && segundos<=10) {

   

      background(#84C9C0);
      pushMatrix();
      translate(5, 10);
    scale(1);
      fill(0);
      rect(20, 20, 70, 50);
      rect(45, 10, 20, 10);

      fill(#D6D6D6);
      ellipse(55, 45, 40, 40);
      rect(50, 10, 10, 10);
      rect(75, 20, 10, 10);
      fill(0);
      ellipse(55, 45, 30, 30);
      popMatrix();




      fill(0);
      textSize(25);
      text("Mantenha-se a par de todas as exposições", 100, 50);
     
    }
  

  if (segundos>10 && segundos<=20) {

    
    background(#84C9C0);
    pushMatrix();
     translate(30, 5);
    scale(0.5);
    fill(0);
    ellipse(90, 150, 90, 60); 
    ellipse(90, 110, 70, 60);

    rect(83, 30, 15, 100); 
    ellipse(90, 20, 25, 30);

    fill(#7D7D7E);
    ellipse(85, 20, 5, 20);
    ellipse(95, 20, 5, 20);

    fill(#BBBABC);
    ellipse(90, 115, 30, 30);

    fill(#7D7D7E);
    ellipse(90, 115, 20, 20);


    
    fill(0);
    ellipse(30, 30, 30, 30);
    ellipse(30, 60, 10, 40);
    ellipse(30, 90, 2, 150);
    ellipse(30, 160, 40, 20);


    popMatrix();
     fill(0);
      textSize(25);
      text("Não perca nenhum concerto!", 100, 50);
  }

  if (segundos>20 && segundos<=30) {
    background(#DBDBDB);
    pushMatrix();
    for (int a=0; a<=800; a+=100) {
      strokeWeight(0);
      fill(0);
      triangle(a+30, 40, a+30, 90, a+10, 40);
      triangle(a+70, 40, a+70, 90, a+90, 40);

      fill(#FFFFFF);
      rect(a+30, 40, 40, 50);

      fill(0);
      rect(a+40, 40, 20, 50);
      fill(#FFFFFF);
      ellipse(a+20, 35, 15, 15);
      ellipse(a+30, 35, 15, 15);
      ellipse(a+40, 35, 15, 15);
      ellipse(a+50, 35, 15, 15);
      ellipse(a+60, 35, 15, 15);
      ellipse(a+70, 35, 15, 15);
      ellipse(a+80, 35, 15, 15);

      ellipse(a+70, 25, 15, 15);
      ellipse(a+60, 25, 15, 15);
      ellipse(a+50, 25, 15, 15);
      ellipse(a+40, 25, 15, 15);
      ellipse(a+30, 25, 15, 15);

      ellipse(a+40, 15, 15, 15);
      ellipse(a+50, 15, 15, 15);
      ellipse(a+60, 15, 15, 15);  
     
    }
    popMatrix();
  }  




  if (segundos>30 && segundos<=40) {
    background(#DBDBDB);
    pushMatrix();
    for (int a=5; a<=800; a+=150) {
    
      fill(0);
     
      ellipse(a+40, 30, 30, 30);
      rect(a+35, 30, 10, 30);
      triangle(a+5, 70, a+40, 60, a+75, 70);
      strokeWeight(5);
 
      line(a+35, 70, a+30, 90);
      line(a+45, 70, a+55, 90);
      
      line(a+9, 17, a+40, 50);
      line(a+40, 50, a+75, 40);
    }
    popMatrix();
    strokeWeight(8);
    fill(#84C9C0);
    textSize(25);
    text("Não perca tempo venha bailar!", 90, 60);
  }

  if (segundos>40 && segundos<=50) {
    background(#DBDBDB);
    pushMatrix();
    translate(5, 20);
    
    for (int i=-20; i<=800; i+=85) {
      noStroke();
      fill(0);
      ellipse(i+40, 35, 70, 70);

      fill(#363636);
      ellipse(i+40, 35, 65, 65);

      fill(#4D4D4D);
      ellipse(i+40, 35, 60, 60);

      fill(#585858);
      ellipse(i+40, 35, 55, 55);

      fill(#676767);
      ellipse(i+40, 35, 50, 50);
      fill(#767676);
      ellipse(i+40, 35, 45, 45);

      fill(#868686);
      ellipse(i+40, 35, 40, 40);

      fill(#959595);
      ellipse(i+40, 35, 35, 35);

      fill(#A2A2A2);
      ellipse(i+40, 35, 30, 30);

      fill(#B2B2B2);
      ellipse(i+40, 35, 25, 25);

      fill(#C4C4C4);
      ellipse(i+40, 35, 20, 20);

      fill(#D8D8D8);
      ellipse(i+40, 35, 15, 15);

      fill(#504E4E);
      ellipse(i+40, 35, 10, 10);

      fill(#FFFFFF);
      ellipse(i+40, 35, 7, 7);
    }
    popMatrix();
    strokeWeight(8);
     fill(#84C9C0); 
    textSize(25);     
    text("Não perca nenhum concerto!", 160, 60);
  }



  if (segundos>50 && segundos<=60) {
    background(#DBDBDB);      
    fill(#E3A60B);
    rect(0, 12, 800, 2);

    for (int j=0; j<=100; j+=12) {
      fill(#BC0915);
      ellipse(j, 10, 15, 200);
    }

    for (int q=500; q<=800; q+=12) {
      fill(#BC0915);
      ellipse(q, 10, 15, 200);
    }


    for (int i=0; i<=800; i+=10) {
      fill(#BC0915);
      ellipse(i, 10, 15, 30);
      textSize(20);
      text("Venha visitar o nosso Teatro Viriato", 150, 80);
      fill(0);
    }
  
  }

 }
}
 
    