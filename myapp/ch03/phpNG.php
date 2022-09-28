<?php PHP//php 블록의 시작
class Grammer //클래스 정의
{
    public $name = "GNUMIZ";//문자열을 $name에 할당한다

    public function phpStudy($year)//메서드 정의
    {
        echo "변수 name은 {$this->name} 입니다.<br/>";//내용 출력
        echo "변수 year은 {$year} <br/>";
        echo $this->name . $year . "<br/>";
    }
}
$year = 2022;
$grammer = new grammer();
$grammer -> phpStudy($year);