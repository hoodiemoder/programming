(defun hello-world ()
  (print "Hello World! uwu"))

(defvar *sample-list*
  '(1 2 3 4 5 6 7 8 9))

(defun list-loop ()
  (loop for item in *sample-list*
	do (print item)))

(defun simple-sum ()
  '(+ 1 2))
