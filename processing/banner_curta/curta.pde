
void curta1(){
   c1.beginDraw();
   c1.strokeWeight(0);
   c1.fill(0);
   c1.triangle(30,40,30,90,10,40);//esq
   c1.triangle(70,40,70,90,90,40);//dir
  
   c1.fill(#FFFFFF);
   c1.rect(30,40,40,50);
   
   c1.fill(0);
    c1.rect(40,40,20,50);
    //pipocas
     c1.fill(#FFFFFF);
    c1.ellipse(20,35,15,15);
    c1.ellipse(30,35,15,15);
    c1.ellipse(40,35,15,15);
  c1.ellipse(50,35,15,15);
  c1.ellipse(60,35,15,15);
  c1.ellipse(70,35,15,15);
  c1.ellipse(80,35,15,15);

  c1.ellipse(70,25,15,15);
  c1.ellipse(60,25,15,15);
  c1.ellipse(50,25,15,15);
  c1.ellipse(40,25,15,15);
  c1.ellipse(30,25,15,15);
  
  c1.ellipse(40,15,15,15);
  c1.ellipse(50,15,15,15);
   c1.ellipse(60,15,15,15);
    c1.endDraw();
   
}