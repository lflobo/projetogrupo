void setup() {
  size(120, 150);
}

void draw() {
 
  fill(255);
  noStroke();
  rect(10, 20, 100, 50); //(272, 40, 100, 50); 242
  ellipse(60, 80, 100, 120); 
  fill(#4B4A4A); 

  ellipse(33, 60, 30, 20);//olhos
  ellipse(87, 60, 30, 20);
  
  //boca
  arc(60, 95, 60, 50, PI*2, PI*3);
}