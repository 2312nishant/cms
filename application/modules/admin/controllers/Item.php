<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Item extends MY_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Item');
		$this->allow_group_access(array('admin'));
		$this->data['parent_menu'] = 'post';
	}

	public function index(){
		
		$config['base_url'] = site_url('admin/categories/index/');
		$config['total_rows'] = count($this->Item->find());
		$config['per_page'] = 10;
		$config["uri_segment"] = 4;
		
		$this->data['categories'] = $this->Item->find($config['per_page'], $this->uri->segment(4));

		$this->data['pagination'] = $this->bootstrap_pagination($config);
		$this->load_admin('categories/index');
	}

	public function add(){
            $item_name = $this->input->post('item_name');
            $item_code =  $this->input->post('item_code');
		if(empty($item_name)  && empty($item_code))
                {
                    $array = array('success' => 'False', 'message' => 'Please enter Item name and Item code');
		}
                else if(empty($item_name)  && !empty($item_code))
                {
                    $array = array('success' => 'False', 'message' => 'Please enter Item name');
		}
                else if(!empty($item_name)  && empty($item_code))
                {
                    $array = array('success' => 'False', 'message' => 'Please enter Item Code');
		}
                else{
                     $category = array(
				'name' => $item_name,
				'code' => $item_code
                     );
                     $data = $this->Item->create($category);
                     
                     if(isset($data))
                     {
                     $array = array('success' => 'True', 'message' => 'Item Saved Successfully');
                     }
                     else
                     {
                     $array = array('success' => 'True', 'message' => 'Item failed to save');
                     }
                     
                }
                return $this->response($array, 200); // 200 being the HTTP response code
	}

	public function edit($id = null)
        {
            $item_id = $this->input->post('id');
            $item_name = $this->input->post('item_name');
            $item_code =  $this->input->post('item_code');
            
            if(empty($item_id))
            {
                $array = array('success' => 'False', 'message' => 'Please enter Item Id');
            }
            
            if(empty($item_name)  && empty($item_code))
            {
                $array = array('success' => 'False', 'message' => 'Please enter Item name and Item code');
            }
            else if(empty($item_name)  && !empty($item_code))
            {
                $array = array('success' => 'False', 'message' => 'Please enter Item name');
            }
            else if(!empty($item_name)  && empty($item_code))
            {
                $array = array('success' => 'False', 'message' => 'Please enter Item Code');
            }else
            {
                $category = array(
                            'name' => $item_name,
                            'code' => $item_code
                            );
                $data = $this->Item->update($category, $id);
                
                if(isset($data))
                {
                     $array = array('success' => 'True', 'message' => 'Item updated Successfully');
                }
                else
                {
                     $array = array('success' => 'True', 'message' => 'Item failed to update');
                }
            }
            return $this->response($array, 200); // 200 being the HTTP response code
            
        }

	public function delete(){
             $item_id = $this->input->post('id');
             
                if(empty($item_id))
                {
                    $array = array('success' => 'False', 'message' => 'Please enter Item Id');
                }
		if(!empty($item_id)){
			$this->Item->delete($id);
                        $array = array('success' => 'True', 'message' => 'Item has been deleted');
		}else{
                    $array = array('success' => 'True', 'message' => 'Invalid id');
                }
                return $this->response($array, 200); // 200 being the HTTP response code
	}
}
