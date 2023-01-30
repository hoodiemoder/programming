clear()
setSpeed(superFast)
setPenColor(blue)
var colorN = 0
var n = 1
val phi = 3.141592653589793238462643383279502884197169399375105820974944592307816406286208998628034825342117068
for (i <- 1 to 10) {
    for (n <- 1 to 10) {
        repeat(16) {
            if (colorN % 2 == 0) {
                setPenColor(red)
            }
            else {
                setPenColor(blue)
            }
            colorN = colorN + 1
            repeat(360) {
            forward(1)
            left(1)
            }
            left(22.5)
        }
        forward(360 / phi * 2)
        if (n == 10) {
            left(90)
            forward(360 / phi * 2)
            left(180)
        }
    }

}