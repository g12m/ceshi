<?php
// +----------------------------------------------------------------------
// | ThinkCMF [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013-2018 http://www.thinkcmf.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 老猫 <thinkcmf@126.com>
// +----------------------------------------------------------------------
namespace app\portal\controller;

use cmf\controller\HomeBaseController;
use app\portal\service\PostService;
use think\Db;
class PageController extends HomeBaseController
{
    public function index()
    {
        $postService = new PostService();
        $pageId      = $this->request->param('id', 0, 'intval');
        $page        = $postService->publishedPage($pageId);

        if (empty($page)) {
            abort(404, ' 页面不存在!');
        }

        $this->assign('page', $page);
        $more = $page['more'];
        //单页列表
       $list=Db::name('portal_post')->where('id',$pageId)->select()->ToArray();
       foreach ($list as $key => $value) {
         if(is_array($list))
         {
            $list=$value;
         }
       }
      //数组转json
    // json_encode();

       $a=$list['more'];

       //json转数组
       $thumb=json_decode($a,true);

       //内容转换
         $s=cmf_replace_content_file_url(htmlspecialchars_decode($list['post_content']));
        $tplName = empty($more['template']) ? 'page' : $more['template'];
      $this->assign('list',$list);
          $this->assign('thumb',$thumb);
          
          $this->assign('s',$s);
        return $this->fetch("/$tplName");
    }

}
