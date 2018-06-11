<?php 

class ItemNav {
  private $id;
  private $subMenu;
  private $parentMenu;
  private $title;
  private $link;
  private $active;
  
  /**
   * Get the value of id
   */ 
  public function getId(){
    return $this->id;
  }
  /**
   * Set the value of id
   * @return  self
   */ 
  public function setId($id){
    $this->id = $id;
    return $this;
  }
  
  /**
   * Get the value of sub_menu
   */
  public function getParentMenu(){
    return $this->parentMenu;
  }
  /**
   * Set the value of sub_menu
   * @return  self
   */
  public function setParentMenu($parentMenu){
    $this->parentMenu = $parentMenu;
    return $this;
  }

  /**
   * Get the value of sub_menu
   */ 
  public function getSubMenu(){
    return $this->subMenu;
  }
  /**
   * Set the value of sub_menu
   * @return  self
   */ 
  public function setSubMenu($subMenu){
    $this->subMenu = $subMenu;
    return $this;
  }
  
  /**
   * Get the value of title
   */
  public function getTitle(){
    return $this->title;
  }
  /**
   * Set the value of title
   * @return  self
   */
  public function setTitle($title){
    $this->title = $title;
    return $this;
  }

  /**
   * Get the value of link
   */
  public function getLink(){
    return $this->link;
  }
  /**
   * Set the value of link
   * @return  self
   */
  public function setLink($link){
    $this->link = $link;
    return $this;
  }

  /**
   * Get the value of active
   */
  public function getActive(){
    return $this->active;
  }
  /**
   * Set the value of active
   * @return  self
   */
  public function setActive($active){
    $this->active = $active;
    return $this;
  }


}

?>