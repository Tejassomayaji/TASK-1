public function testMail(){

$user=Users::find(auth()->user()->id);

Notification::send( $user, new TestMail() );

}