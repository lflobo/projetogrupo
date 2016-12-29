
void setup() {
  size(400, 100);
    background(#99cccc);
  
   
}
 
    void draw() {


    pushMatrix();
    translate(-10, 10);
    scale(0.5);
    ellipse(100,100,120,120);
    fill(0);
    ellipse(100,100,100,100);
    fill(#868686);
    ellipse(100,100,30,30);
    ellipse(100,70,15,15);
    ellipse(130,100,15,15);
    ellipse(100,130,15,15);
    ellipse(70,100,15,15);
    ellipse(80,80,15,15);
    ellipse(120,80,15,15);
    ellipse(120,120,15,15);
    ellipse(80,120,15,15);
    strokeWeight(5);
    line(150,140,180,150);
    popMatrix();
    

    pushMatrix();
    translate(0, 10);
    scale(0.5);
    strokeWeight(0);
    fill(0);
    ellipse(410,60,40,40);
    ellipse(410,120,10,85);
    triangle(375,115,410,100,445,115);
    strokeWeight(7);
    line(418,115,440,155);//PERNA     
    line(375,70,410,100);//braço esq
    line(410,100,445,70);//braço esq
    popMatrix();

//	quadro
    pushMatrix();
    translate(-5, 10);
    scale(0.5);
    fill(0);
    rect(170,40,100,120);
    fill(#B2B2B2);
    rect(175,45,90,110);
    fill(#524F4F);
    ellipse(220,90,60,80);
    fill(0);
    triangle(220,95,172,155,270,155);
    ellipse(220,80,40,50);
    popMatrix();


    pushMatrix();
    translate(-2, 10);
    scale(0.5);
    noStroke();
  	fill(255);
  	rect(272,40,100,50);
  	ellipse(322,100,100,120);
  	fill(#4B4A4A);
  	strokeWeight(6);
  	ellipse(295,80,30,20);
  	ellipse(349,80,30,20);
  	arc(322,115,60,50,PI*2,PI*3);
    popMatrix();

    font = loadFont("letra7.vlw");
textFont(font, 50);
text("Casa do Povo", 0, 200);
fill(0);
  } 
  