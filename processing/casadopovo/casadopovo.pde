PGraphics c1;
PGraphics q1;
PGraphics t1;
PGraphics d1;
PGraphics t2;
PFont font;
void setup() {
  size(600, 400);
c1= createGraphics(400,400);
q1= createGraphics(400,400);
t1= createGraphics(400,400);
d1= createGraphics(600,400);
t2= createGraphics(600,400);
}
void draw() {
scale(0.7);


  cine();
  quadro();
  teatro();
  danca();
  texto();
  image(q1,-35,-10);
  image(c1,-35,-10);
  image(t1,-35,-10);
  image(d1,-35,-10);
  image(t2,-35,-10);
}