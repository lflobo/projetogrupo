PFont font;
PGraphics di;

void setup(){
  size(800, 100);
   di= createGraphics(100,100);
   background(#84C9C0);
}

void draw(){
  

disco();
for(int i=-20; i<=800; i+=85){
    image(di,0+i,10);
  }
  
  
  font = loadFont("letra4.vlw");
textFont(font, 40);
text("Não perca nenhum concerto!", 160, 60);
  strokeWeight(8);
fill(#F0F0F0);


}