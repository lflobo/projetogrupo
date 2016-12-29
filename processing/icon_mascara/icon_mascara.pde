PGraphics m1;
void setup() {
  size(260, 260);
}

void draw() {
 fill(#84C9C0);
ellipse(130,130,260,260);
  m1= createGraphics(500,550);
 mascara();
 image(m1,70,60);
 
}


void mascara(){
   m1.beginDraw();
    m1.fill(255);
   m1.noStroke();
   m1.rect(10, 20, 100, 50); 
   m1.ellipse(60, 80, 100, 120); 
   m1.fill(#4B4A4A); 

  m1.ellipse(33, 60, 30, 20);//olhos
   m1.ellipse(87, 60, 30, 20);
  
   m1.arc(60, 95, 60, 50, PI*2, PI*3);
   m1.endDraw();
}