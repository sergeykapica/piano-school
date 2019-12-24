<?
namespace Modules;

class DB extends \PDO
{
    private $connectionParams = 'mysql:dbname=pianoschool;host=localhost;charset=utf8';
    private $user = 'root';
    private $password = '';
    
    private $DBStructure = array(
        
        'services' => array(
            'list' => 'services_list',
            'type_list' => 'services_type_list'
        ),
        
        'articles' => array(
            'list' => 'articles_list',
            'sections_list' => 'articles_sections_list'
        ),
        
        'videos' => array(
            'list' => 'videos_list'
        ),
        
        'teachers' => array(
            'list' => 'teachers_list'
        )
        
    );
    
    public function __construct()
    {
        parent::__construct($this->connectionParams, $this->user, $this->password);
    }
    
    public function getServicesList($offset = false, $limit = false)
    {
        if($offset === false && $limit === false)
        {
            $sqlRequest = 'SELECT sl.ID, sl.TITLE, sl.DESCRIPTION, sl.PRICE, sl.LESSONS_COUNT, sl.LESSON_DURATION, sl.IMAGE_URL, stl.TITLE as SERVICE_TYPE_TITLE FROM ' . $this->DBStructure['services']['list'] . ' as sl, ' . $this->DBStructure['services']['type_list'] . ' as stl WHERE sl.TYPE = stl.SYMBOL_CODE ORDER BY sl.ID ASC';
        }
        else
        {
            $sqlRequest = 'SELECT sl.ID, sl.TITLE, sl.DESCRIPTION, sl.PRICE, sl.LESSONS_COUNT, sl.LESSON_DURATION, sl.IMAGE_URL, stl.TITLE as SERVICE_TYPE_TITLE FROM ' . $this->DBStructure['services']['list'] . ' as sl, ' . $this->DBStructure['services']['type_list'] . ' as stl WHERE sl.TYPE = stl.SYMBOL_CODE ORDER BY sl.ID ASC LIMIT ' . $offset . ', ' . $limit;
        }
        
        $prepareRequest = $this->prepare($sqlRequest);
        
        if($prepareRequest->execute())
        {
            return $prepareRequest->fetchAll();
        }
        else
        {
            return false;
        }
    }
    
    public function getArticlesList($category = false, $element = false)
    {
        if($category !== false)
        {
            if($element === false)
            {
                $sqlRequest = 'SELECT al.ID, al.SUBJECT, al.CONTENT, al.ELEMENT_SYMBOL_CODE, al.SECTION_SYMBOL_CODE, al.CREATE_DATE, asl.TITLE as SECTION_TITLE FROM ' . $this->DBStructure['articles']['list'] . ' as al, ' . $this->DBStructure['articles']['sections_list'] . ' as asl WHERE al.SECTION_SYMBOL_CODE = asl.SYMBOL_CODE AND asl.SYMBOL_CODE = "' . $category . '" ORDER BY al.CREATE_DATE DESC';
            }
            else
            {
                $sqlRequest = 'SELECT al.ID, al.SUBJECT, al.CONTENT, al.ELEMENT_SYMBOL_CODE, al.SECTION_SYMBOL_CODE, al.CREATE_DATE, asl.TITLE as SECTION_TITLE FROM ' . $this->DBStructure['articles']['list'] . ' as al, ' . $this->DBStructure['articles']['sections_list'] . ' as asl WHERE al.SECTION_SYMBOL_CODE = asl.SYMBOL_CODE AND asl.SYMBOL_CODE = "' . $category . '" AND al.ELEMENT_SYMBOL_CODE = "' . $element . '" ORDER BY al.CREATE_DATE DESC';
            }
        }
        else
        {
            $sqlRequest = 'SELECT ID, SUBJECT, CONTENT, ELEMENT_SYMBOL_CODE, SECTION_SYMBOL_CODE, CREATE_DATE FROM ' . $this->DBStructure['articles']['list'] . ' ORDER BY al.CREATE_DATE DESC';
        }
        
        $prepareRequest = $this->prepare($sqlRequest);
        
        if($prepareRequest->execute())
        {
            return $prepareRequest->fetchAll();
        }
        else
        {
            return false;
        }
    }
    
    public function getArticlesSectionsList($category = false)
    {
        $sqlRequest = 'SELECT ID, SYMBOL_CODE, TITLE FROM ' . $this->DBStructure['articles']['sections_list'] . ' ORDER BY TITLE DESC';
        
        $prepareRequest = $this->prepare($sqlRequest);
        
        if($prepareRequest->execute())
        {
            return $prepareRequest->fetchAll();
        }
        else
        {
            return false;
        }
    }
    
    public function getVideosList()
    {
        $sqlRequest = 'SELECT ID, TITLE, DESCRIPTION, URL, PREVIEW_IMAGE_URL, DURATION, CREATE_DATE FROM ' . $this->DBStructure['videos']['list'] . ' ORDER BY CREATE_DATE DESC';
        
        $prepareRequest = $this->prepare($sqlRequest);
        
        if($prepareRequest->execute())
        {
            return $prepareRequest->fetchAll();
        }
        else
        {
            return false;
        }
    }
    
    public function getTeachersList()
    {
        $sqlRequest = 'SELECT ID, NAME, MIDDLE_NAME, LAST_NAME, DIRECTION, IMAGE_URL, REFERENCE_BIOGRAPHY FROM ' . $this->DBStructure['teachers']['list'] . ' ORDER BY NAME ASC';
        
        $prepareRequest = $this->prepare($sqlRequest);
        
        if($prepareRequest->execute())
        {
            return $prepareRequest->fetchAll();
        }
        else
        {
            return false;
        }
    }
}