<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html><html><head><title></title><link rel="stylesheet" type="text/css" href="__PUBLIC__/css/common.css"><meta charset="utf-8"></head><body><form action="<?php echo U(GROUP_NAME.'/Category/changeSort');?>" method="post"><table><tr><th colspan="7"><h2>分类列表</h2></th></tr><tr><th>ID</th><th>名称</th><th>PID</th><th>排序</th><th>子目录</th><th>操作</th></tr><?php if(is_array($cate)): foreach($cate as $key=>$v): ?><tr><td><?php echo ($v["id"]); ?></td><td width="10%"><?php echo ($v["name"]); ?></td><td><?php echo ($v["pid"]); ?></td><td width="10%"><input class="input3" type="text" name="<?php echo ($v["id"]); ?>" value="<?php echo ($v["sort"]); ?>"></td><td width="50%"><?php if($v['child'] == null): ?>没有子栏目
				<?php else: ?><table border="0"><tr><td>ID</td><td>子栏目名</td><td>PID</td><td>排序</td><td>操作</td></tr><?php $__FOR_START_4814__=0;$__FOR_END_4814__=count($v['child']);for($i=$__FOR_START_4814__;$i < $__FOR_END_4814__;$i+=1){ ?><tr><td><?php echo ($v["child"]["$i"]["id"]); ?></td><td><?php echo ($v["child"]["$i"]["name"]); ?></td><td><?php echo ($v["child"]["$i"]["pid"]); ?></td><td><input class="input3" type="text" name="<?php echo ($v["child"]["$i"]["id"]); ?>" value="<?php echo ($v["child"]["$i"]["sort"]); ?>"></td><td>[<a href="">编辑</a>] [<a href="<?php echo U(GROUP_NAME. '/Category/delCate', array('id' => $v['child'][$i]['id']));?>">删除</a>]</td></tr><?php } ?></table><?php endif; ?></td><td>[<a href="<?php echo U(GROUP_NAME.'/Category/addCate', array('pid' => $v['id']));?>">添加子分类</a>] [<a href="">编辑</a>] [<a href="<?php echo U(GROUP_NAME. '/Category/delCate', array('id' => $v['id']));?>">删除</a>]</td></tr><?php endforeach; endif; ?><tr><td colspan="7"><input class="input3" type="submit" value="修改排序"></td></tr></table></form></form></body></html>