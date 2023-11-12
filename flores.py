import turtle

# Configuración inicial
window = turtle.Screen()
window.bgcolor("white")

def draw_flower():
    # Dibuja el tallo
    turtle.color("green")
    turtle.begin_fill()
    turtle.fillcolor("green")
    turtle.left(90)
    turtle.forward(200)
    turtle.right(90)

    # Dibuja el círculo central (centro de la flor)
    turtle.color("yellow")
    turtle.begin_fill()
    turtle.fillcolor("yellow")
    turtle.circle(40)
    turtle.end_fill()

    # Dibuja los pétalos
    turtle.color("yellow")
    for _ in range(12):
        # Dibuja un pétalo
        turtle.begin_fill()
        turtle.fillcolor("yellow")
        turtle.circle(100, 60)
        turtle.left(120)
        turtle.circle(100, 60)
        turtle.end_fill()

        # Gira para dibujar el siguiente pétalo
        turtle.left(30)

    # Dibuja la palabra "te quiero"
    turtle.penup()
    turtle.goto(-50, -250)
    turtle.color("red")
    turtle.pendown()
    turtle.write("Te Quiere tu compa ARK", align="center", font=("Arial", 30, "bold"))

# Inicializa la tortuga
flower_turtle = turtle.Turtle()
flower_turtle.speed(1200)  # Ajusta la velocidad de dibujo

# Dibuja la flor grande amarilla con la frase "te quiero"
draw_flower()

# Cierra la ventana al hacer clic
window.exitonclick()
