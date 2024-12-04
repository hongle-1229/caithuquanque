        <!-- <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>

        <body> -->
        <?php

        $ten = "World";
        echo "<h1>Hello $ten !</h1><br>"; 
        eCho "Hello" .$ten ."<br>"; 
        $y = 2;
        $x=2;
        echo $y+$x. "<br>";
        EcHo "Không hề phân biệt chữ hoa chữ thường cho các class, function,... <br>";

        $color = "red";
        $_name;
        $COLOR;
        $coLOR;
        echo "This is $color color <br>";
        var_dump("hongle");
        echo "<br>";
        var_dump(4); // var_dump(): trả về kiểu dữ liệu và giá trị của kiểu dữ liệu
        echo "<br>";
        var_dump([2,3,4]);
        echo "<br>";
        $bool= true;
        $bool1=false;
        echo $bool . "<br>";
        echo $bool1. "<br>"; //không in ra giá trị
        // biến cục bộ chỉ truy cập trong hàm
        // biến toàn cục muốn truy cập trong hàm cần gọi từ khóa 'global' trước biến đó

        //global
        //1
        $var1 = 4;
        $var2 = 6;
        function sum(){
            global $var1, $var2;
            echo $var1 + $var2."<br>";
        }
        sum();
        //2
        function sum1(){
            $GLOBALS['var1'] = $GLOBALS['var1'] + $GLOBALS['var2'];
        }
        sum1();
        echo $var1 . "<br>";

        // local
        function name2(){
            $nameStudent= "Hongle";
            echo $nameStudent. "<br>";
        }
        name2();

        //static
        // biến static dùng để giữ giá trị của biến cục bộ
        function sum3(){
            static $var4 = 1;
            echo $var4;
            $var4++;
        }
        sum3();
        print "<br>";
        print "Một từ khóa ouput data khác <br>";
        sum3();
        echo "<br>";
        sum3();
        // print "1", "1"; : lỗi
        echo "<br>", "hongle, ", "kimchi";

        /* print: 
            - Có giá trị trả về(1), được sử dụng trong các expression(biểu thức) 
            - Chỉ xuất 1 chuỗi tại 1 thời điểm
            - Hoạt động như 1 hàm, có hoặc không cần dấu ngoặc đơn
        */

        /* echo:
            - Không có giá trị trả về, chỉ xuất dữ liệu
            - Có thể xuất nhiều chuỗi 1 lúc, phân tách bởi dấu phẩy
            - Hoạt động như một câu lệnh
        */

        // Sự khác biệt giữa dấu ngoặc đơn và kép:
        // $txt = "hongle"
        // '': biến không thể chèn trong cặp dấu ngoặc đơn : echo 'hello $txt hihi' => output: hello $txt hihi
        // "": biến có thể chèn trong cặp dấu ngoặc kép : echo "hello $txt hihi" => output: hello hongle hihi

        // class, object

        class car{
            public $color;
            public $model;
            public function __construct($color, $model)
            {
                $this->color = $color;
                $this->model= $model;
            }
            public function message(){
                return "My car is a " . $this->color ." " . $this->model ." !";
            }
        }
        $myCar = new Car("red", "Ferrari");
        echo "<br>";
        var_dump($myCar);

        // ép kiểu
        echo "<br>";
        $int = 5;
        $int = (string) $int;
        var_dump($int);

        // Nếu biến cùng tên thì giá trị của biến là giá trị được gán cuối cùng
        $name1 = "Hongleee";
        $name1 = "Hoang Thi Hong Le";
        echo "<br>" . $name1;
        echo "<br>";

        // strlen(): độ dài chuỗi
        echo "Hongleeee dài ". strlen("Hongleeee") . " kí tự <br>";
        // str_word_count: đếm số từ của chuỗi
        echo "Từ 'Hello world' có " .str_word_count("Hello world!"). " từ";
        // strpos: tìm kiếm 1 văn bản cụ thể trong 1 chuỗi, nếu kết quả khớp sẽ trả về vị trí khớp đầu tiên, nếu không thì trả về False
        echo "<br> Vị trí của từ 'world' trong chuỗi 'Hello world' là : " .strpos("Hello world", "world");
        //strtoupper()/ strtolower()
        $str1 = "HfgyfsHGHg le";
        echo "<br>".strtoupper($str1);
        echo "<br>".strtolower($str1);
        // str_replace()
        echo "<br>" . str_replace("le", "hihi", $str1);
        //strrev()
        echo "<br>". strrev($str1);
        // trim(): loại bỏ space thừa trong chuỗi
        echo "<br>" . trim("   hong   le   hihi   "). "<br>";
        //explore(): tách chuỗi bởi kí tự được chỉ định và loại bỏ dấu space, dùng print_r()
        $x1 = "hello world";
        $x2 = explode("o", $x1);
        var_dump($x2);
        echo "<br>";
        print_r($x2);   
        // nối 2 chuỗi: sử dụng dấu "." hoặc dùng dấu ngoặc kép
        $x3 = "hongle";
        $x4 = $x1." ".$x3;
        $x5 = "$x1 $x3";
        echo "<br>" . $x4;
        echo "<br>" . $x5;
        //substr(): trả về 1 phạm vi kí tự được chỉ định hoặc từ vị trí được chỉ định đến hết
        echo "<br>". substr($x1, 3, 8); // lo world
        echo "<br>" . substr($x1, 2); // llo world
        // nếu chỉ số đầu là số âm, chuỗi sẽ được tính theo độ dài từ cuối lên rồi cắt
        echo "<br>" . substr($x1, -8, 4); // lo w
        echo "<br>". substr($x1, -7); // o world
        echo "<br>" . substr($x1, 2, -2); // llo wor

        // \r: quay về đầu dòng
        // \n: xuống dòng
        // \000: một kí tự gạch chéo theo sau bới 3 số nguyên sẽ trả về 1 giá trị bát phân
        // giá trị bát phân được chuyển sang hệ thập phân và quy ra ký tự tương ứng trong bảng mã ASCII
        echo "<br> \110"; 
        // \xhh: \x đánh dấu rằng số theo sau nó là mã hex, giá trị theo sau là giá trị hex( hệ thập lục phân)
        // giá trị thập lục phân được chuyển sang hệ thập phân và quy ra ký tự tương ứng trong bảng mã ASCII
        echo "<br> \x4c" . "<br>";

        // is_int(): dùng để ktra xem số đó có phải int không, trả về true/false hoặc 1/0
        // is_float()
        // is_finite(): số hữu hạn
        // is_infinite(): số vô hạn
        // NaN: Not a Number
        // is_nan(): ktra xem giá trị có phải số không
        $nan = acos(8);
        var_dump($nan);
        echo "<br>";
        // is_numeric(): hàm kiểm tra xem giá trị biến có phải là số hoặc chuỗi số hay không
        var_dump(is_numeric(2345));
        echo "<br>";
        var_dump(is_numeric("2345")) ;
        echo "<br>";
        var_dump(is_numeric(23+"10"));
        echo "<br>";
        var_dump(is_numeric("hello"));
        echo"<br>";

        // (int), (integer), intval() : được sử dụng để chuyển đổi một giá trị thành 1 số nguyên
        // (string) -> string, (float) -> float, (bool) -> bool, (array) ->array, (object) -> object, (unset) -> null

        /* (string)
            nếu chuyển bool(false) và null thành string: thì string = "";
            nếu bool(true) => string = "1"
        */

        /* (int) /(float)
            Nếu chuỗi truyền vào bắt đầu bằng số, hàm (int) sẽ nhận số đó
            Nếu không thì chuyển chuỗi thành 0
        */

        /* (bool)
            Nếu giá trị là 0, null, false, empty => false
            Value = -1 => true
        */

        /* (array)
            Khi chuyển thành mảng, hầu hết các kiểu dữ liệu đều chuyển thành mảng được lập chỉ mục với 1 phần tử
            Giá trị Null được chuyển thành 1 mảng trống
        */

        /* Một đối tượng chuyển thành một mảng kết hợp, khi đó tên thuộc tính trở thành khóa, 
            giá trị của thuộc tính trở thành giá trị
        */
        class Mine{
            public $color;
            public $model;
            public function __construct($color, $model){
                $this->color = $color;
                $this->model = $model;
            }
            public function message(){
                return "My car is " . $this->color . " " . $this->model. " !";
            }
        }
        $myCar = new Mine("red", "Ferary");
        $myCar = (array)$myCar;
        var_dump($myCar);
        echo "<br>". pi();
        echo "<br> Số nhỏ nhất là ". min(23, 24, 1, 34, 0, -2);
        echo "<br> Số lớn nhất là ". max(2, 0, -2, 6, 19);
        echo "<br>Trị tuyệt đối của -6.7 là ". abs(-6.7);
        echo "<br> Căn bậc 2 của 64 là ".sqrt(25);
        echo "<br>Làm tròn của 3.4 là ".round(3.4). "<br> Làm tròn của 3.6 là ".round(3.6);
        
        // rand(): hàm tạo ra một số ngẫu nhiên
        echo "<br>Số ngẫu nhiên là ". rand();
        echo "<br> Số ngẫu nhiên trong khoảng từ 10 -> 100 là ". rand(10, 100);

        /* Hằng số: tự động mang tính toàn cục, được sử dụng trên toàn bộ tập lệnh
            - Tạo bằng hàm define(name, value) !! no $ sign before the constant name
            - Tạo bởi từ khóa 'const' (không thể tạo hằng số khai báo bởi 'const' trong một khối như trong 1 hàm hoặc khối lệnh 'if')
            - Define() có thể được tạo bên trong một khối
        */
        define("fruits", [
            "cocomelon", "orange", "potato"
        ]);
        echo "<br>". fruits[0];

        define("name11", "Hongle");
        function test() {
            echo "<br>".name11;
        }
        test();

        echo "<br>";
        $mang1= array('hihi', 'hoho', 'haha');
        print_r($mang1);

        echo "<br>";
        $color1 =[
            2 => 'red',
            4 => 'green',
            6 => 7
        ];
        var_dump($color1);
        echo "<br>";

        //object
        $persons = [
            [
                $nameP1 = 'hongle',
                $age1 = 20,
                $job1 = 'student'
            ],
            [
                $nameP1 = 'ngoc nguyen',
                $age1 = 32,
                $job1 = 'student'
            ],
            [
                $nameP1 = 'vai thieu',
                $age1 = 19,
                $job1 = 'student'
            ]
        ];
        print_r($persons);

        // __DIR__: trả về thư mục của file
        echo "<br> ". __DIR__;
        
        // __FILE__: trả về tên file bao gồm full đường dẫn
        echo "<br>". __FILE__;

        // __FUNCTION__: trả về tên của function
        function test123() {
            return __FUNCTION__;
        }
        $kiwi = test123();
        echo "<br>". $kiwi; // echo test123(); 

        // __LINE__: trả về dòng hiện tại
        echo "<br> Dòng hiện tại là ". __LINE__;

        // __METHOD__: trả về tên class và tên hàm
        class alias{
            public function myvalue(){
                return __METHOD__;
            }
        }
        $ball = new alias();
        echo "<br>". $ball->myvalue();
        ?>

        <!-- </body> -->
        <!-- browser-sync start --proxy "localhost" --files "**/*.php" -->

        <!-- </html> -->