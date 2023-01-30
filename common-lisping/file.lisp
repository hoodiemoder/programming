(defun hello-world ()
  (print "Hello World!"))

(equal '(1 2 3)(list 1 2 3))

(defvar *sample-list*
  '(a b c))

(mapcar (lambda (item)
          (format nil "~a~a~a" item item item))
        *sample-list*)

(defun sum (n1 &optional(n2 0))
  (+ n1 n2))

(defun double-dice-roll ()
  (let ((a (1+ (random 5)))
	(b (1+ (random 5))))
  (format nil "~a ~a" a b)))
