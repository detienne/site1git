<?php 

class Core_Model_Author implements Zend_Acl_Role_Interface, Zend_Acl_Resource_Interface
{
    private $authorId;
    private $authorName;
	/**
     * @return the $authorId
     */
    public function getAuthorId()
    {
        return $this->authorId;
    }

	/**
     * @param field_type $authorId
     */
    public function setAuthorId($authorId)
    {
        $this->authorId = $authorId;
        return $this;
    }

	/**
     * @return the $authorName
     */
    public function getAuthorName()
    {
        return $this->authorName;
    }

	/**
     * @param field_type $authorName
     */
    public function setAuthorName($authorName)
    {
        $this->authorName = $authorName;
        return $this;
    }
	/* (non-PHPdoc)
	 * @see Zend_Acl_Role_Interface::getRoleId()
	 */
	public function getRoleId() {
		// TODO Auto-generated method stub
		return 'author';
	}
	/* (non-PHPdoc)
	 * @see Zend_Acl_Resource_Interface::getResourceId()
	 */
	public function getResourceId() {
		// TODO Auto-generated method stub
		return 'author';
	}



}