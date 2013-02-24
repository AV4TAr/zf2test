<?phprequire_once 'module/Album/src/Album/Model/Album.php';require_once 'PHPUnit/Framework/TestCase.php';use Album\Model\Album;/** * Album test case. */class TestAlbumModel extends PHPUnit_Framework_TestCase{    /**     *     * @var Album     */    private $Album;        private $exchange_array;    /**     * Prepares the environment before running a test.     */    protected function setUp ()    {        parent::setUp();        $this->Album = new Album();                $this->exchange_array = array(            'id' => 1,            'artist' => 'John',            'title' => 'Smith'        );    }    /**     * Cleans up the environment after running a test.     */    protected function tearDown ()    {        // TODO Auto-generated TestAlbumModel::tearDown()        $this->Album = null;                parent::tearDown();    }    /**     * Constructs the test case.     */    public function __construct ()    {        // TODO Auto-generated constructor    }    /**     * Tests Album->exchangeArray()     */    public function testExchangeArray ()    {                $this->Album->exchangeArray($this->exchange_array);                $this->assertEquals($this->exchange_array['id'], $this->Album->id);        $this->assertEquals($this->exchange_array['artist'], $this->Album->artist);        $this->assertEquals($this->exchange_array['title'], $this->Album->title);    }    /**     * Tests Album->getArrayCopy()     */    public function testGetArrayCopy ()    {        $this->Album->exchangeArray($this->exchange_array);        $result = $this->Album->getArrayCopy();        $this->assertInternalType('array', $result);        $this->assertEquals($this->exchange_array['id'], $result['id']);        $this->assertEquals($this->exchange_array['artist'], $result['artist']);        $this->assertEquals($this->exchange_array['title'], $result['title']);    }        /**     * Tests Album->getInputFilter()     */    public function testGetInputFilter ()    {        $result = $this->Album->getInputFilter();        $this->assertInstanceOf('\Zend\InputFilter\InputFilter', $result);    }}