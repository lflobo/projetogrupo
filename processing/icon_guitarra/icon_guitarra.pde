PGraphics g1;

PFont font;
void setup(){
  size(260,260);
   g1= createGraphics(500,500);
  
   
}

void draw(){
  fill(#84C9C0);
ellipse(130,130,260,260);

 translate(40,20);
scale(1);
   image(g1,-2,8);

guitarra();



  }
  void guitarra(){
   g1.beginDraw();
   g1.fill(0);
   g1.ellipse(90,150,90,60);//parte de baixo
    g1.ellipse(90,110,70,60);
    
    g1.rect(83,30,15,100);//parte de cima
    g1.ellipse(90,20,25,30);
    
     g1.fill(#7D7D7E);
     g1.ellipse(85,20,5,20);
    g1.ellipse(95,20,5,20);
     
     g1.fill(#BBBABC);
  g1.ellipse(90,115,30,30);
   
     g1.fill(#7D7D7E);
  g1.ellipse(90,115,20,20);
   
   
   
   g1.endDraw();
}