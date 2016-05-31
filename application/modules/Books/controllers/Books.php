<?php

class Books extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    
    function display_books()
    {
        $data['page_header'] = "All Books";
        $data['description'] = "Displays All Books";
        $data['content_view'] = 'Books/books_display_v';
        $this->template->call_admin_template($data);
    }
    
    function addBook()
    {
        $data['authors'] = $this->create_authors_select();
        $data['page_header'] = "All a Book";
        $data['description'] = "Add a book to the system";
        $data['content_view'] = 'Books/add_book_v';
        $this->template->call_admin_template($data);
    }
    function create_authors_select()
    {
        $this->load->model('Authors/M_Authors');
        
        $authors = $this->M_Authors->get_active_authors();
        $options = "";
        if (count($authors))
        {
            foreach ($authors as $key => $value)
            {
                $options .=
                    "<option value='{$value->author_id}'>
                        {$value->author_lastname} {$value->author_firstname}
                     </option>";
                
            }
            
        }
        return $options;
    }
    //Post Book
    function post_book()
    {
        
    }
}