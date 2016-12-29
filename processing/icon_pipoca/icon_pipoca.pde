
PGraphics pi1;



void setup(){
  size(260,260);
   pi1= createGraphics(500,550);
   
   
}

void draw(){
fill(#84C9C0);
ellipse(130,130,260,260);

  pipoca();
image(pi1,80,80);
  }


  void pipoca(){
   pi1.beginDraw();
   pi1.strokeWeight(0);
   pi1.fill(0);
   pi1.triangle(30,40,30,90,10,40);//esq
   pi1.triangle(70,40,70,90,90,40);//dir
  
   pi1.fill(#FFFFFF);
   pi1.rect(30,40,40,50);
   
   pi1.fill(0);
    pi1.rect(40,40,20,50);
    //pipocas
     pi1.fill(#FFFFFF);
    pi1.ellipse(20,35,15,15);
    pi1.ellipse(30,35,15,15);
    pi1.ellipse(40,35,15,15);
  pi1.ellipse(50,35,15,15);
  pi1.ellipse(60,35,15,15);
  pi1.ellipse(70,35,15,15);
  pi1.ellipse(80,35,15,15);

  pi1.ellipse(70,25,15,15);
  pi1.ellipse(60,25,15,15);
  pi1.ellipse(50,25,15,15);
  pi1.ellipse(40,25,15,15);
  pi1.ellipse(30,25,15,15);
  
  pi1.ellipse(40,15,15,15);
  pi1.ellipse(50,15,15,15);
   pi1.ellipse(60,15,15,15);
    pi1.endDraw();
   
}