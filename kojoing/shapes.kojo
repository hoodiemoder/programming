clear()

def triangle_sides(x: Int) {
    repeat(x) {
        forward(100)
        right(120)
    }
}

def square_sides(x: Int) {
    repeat(x) {
        forward(100)
        left(90)
    }
}
def octagon_sides(x: Int) {
    repeat(x) {
        forward(100)
        right(45)
    }
}

//octagon_sides(8)
//triangle_sides(3)

def triangle_octagon() {
    repeat(8) {
        octagon_sides(1)
        triangle_sides(3)
    }
}
//triangle_octagon()

def triangle_square_octagon() {
    repeat(8){
        octagon_sides(1)
        triangle_sides(3)
        square_sides(4)
    }
}

triangle_square_octagon()
