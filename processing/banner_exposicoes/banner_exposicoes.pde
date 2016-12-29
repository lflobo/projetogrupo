PGraphics ca1;
PFont font;
void setup(){
  size(800, 100);
   ca1= createGraphics(800,100);
   
   background(#84C9C0);
}

void draw(){
  cam1();
   image(ca1,0,10);
     
font = loadFont("letra7.vlw");
textFont(font, 30);
text("Mantenha-se atento não perca nenhuma exposição! ", 100, 80);
fill(0);
  line(140,90,670,90);
}