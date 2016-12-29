PGraphics g1;
PGraphics m1;
PFont font;
void setup(){
  size(800, 200);
   g1= createGraphics(800,200);
   m1= createGraphics(800,200);
   background(#84C9C0);
}

void draw(){
  
font = loadFont("letra4.vlw");
textFont(font, 30);
text("Não perca nenhum concerto, informe-se", 140, 80);
fill(0);
  line(140,90,670,90);
  
   image(g1,0,0);
image(m1,700,0);
guitarra();
micro();


  }