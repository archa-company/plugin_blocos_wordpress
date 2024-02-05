<?php
/**
 * Plugin Name:       Filter Blocks
 * Description:       Plugins de blocos internos da pino e configuração de categorias
 * Version:           1.0.0
 * Author:            Gilmar Longato
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * GitHub Plugin URI:
 */
class FiltersBlocks{
 private $listBlocks=[
  'fbg-plugin/hights',
  'fbg-plugin/newsletter',
  'fbg-plugin/enquete',
  'fbg-plugin/postview',
  'fbg-plugin/postslist',
  'fbg-plugin/recipes',
  'fbg-plugin/categories-menu',
  'web-stories/embed',
  'yoast-seo/breadcrumbs',
  'yoast/how-to-block',
  'yoast/faq-block',
  'core/paragraph',
  'core/image',
  'core/heading',
  'core/gallery',
  'core/list',
  'core/list-item',
  'core/quote',
  'core/archives',
  'core/audio',
  'core/button',
  'core/buttons',
  'core/calendar',
  'core/categories',
  'core/freeform',
  'core/code',
  'core/column',
  'core/columns',
  'core/cover',
  'core/embed',
  'core/file',
  'core/group',
  'core/html',
  'core/latest-comments',
  'core/latest-posts',
  'core/media-text',
  'core/missing',
  'core/more',
  'core/nextpage',
  'core/page-list',
  'core/page-list-item',
  'core/pattern',
  'core/preformatted',
  'core/pullquote',
  'core/block',
  'core/rss',
  'core/search',
  'core/separator',
  'core/shortcode',
  'core/social-link',
  'core/social-links',
  'core/spacer',
  'core/table',
  'core/tag-cloud',
  'core/text-columns',
  'core/verse',
  'core/video',
  'core/navigation',
  'core/navigation-link',
  'core/navigation-submenu',
  'core/site-logo',
  'core/site-title',
  'core/site-tagline',
  'core/query',
  'core/template-part',
  'core/avatar',
  'core/post-title',
  'core/post-excerpt',
  'core/post-featured-image',
  'core/post-content',
  'core/post-author',
  'core/post-author-name',
  'core/post-date',
  'core/post-terms',
  'core/post-navigation-link',
  'core/post-template',
  'core/query-pagination',
  'core/query-pagination-next',
  'core/query-pagination-numbers',
  'core/query-pagination-previous',
  'core/query-no-results',
  'core/read-more',
  'core/comments',
  'core/comment-author-name',
  'core/comment-content',
  'core/comment-date',
  'core/comment-edit-link',
  'core/comment-reply-link',
  'core/comment-template',
  'core/comments-title',
  'core/comments-pagination',
  'core/comments-pagination-next',
  'core/comments-pagination-numbers',
  'core/comments-pagination-previous',
  'core/post-comments-form',
  'core/home-link',
  'core/loginout',
  'core/term-description',
  'core/query-title',
  'core/post-author-biography',
  'core/legacy-widget',
  'core/widget-group',
  'core/details',
  'core/footnotes',
  'core/post-time-to-read',
  'core/table-of-contents'
 ];
 public function register_category($c=[]){
  return array_merge([[
   'slug'=>'fbg-plugin-category',
   'title'=>get_option('fbg-plugin-title','Pino Lab'),
   'icon'=>'multisite'
  ]],$c);
 }
 public function __construct(){
  add_action('init',[$this,'sin']);
  add_action('admin_menu',[$this,'menu']);
  add_action('admin_init',[$this,'start']);
  add_filter('admin_footer_text','__return_empty_string',11);
  add_filter('update_footer','__return_empty_string',11);
  add_filter('allowed_block_types_all',function($b,$p){
   return array_values(
    array_filter($this->listBlocks,
     function($v){return get_option("fbg-$v",0)!=1;}
    )
   );
  },10,2);
  add_action('rest_api_init',[$this,'rest_api']);
 }
 public function rest_api(){
  register_rest_route('fbgfilter','search',[
   'methods'=>'POST',
   'callback'=>[$this,'search'],
   'permission_callback'=>'__return_true'
  ]);
 }
 public function search(WP_REST_Request $q){
  $u=get_option('fbg-plugin-url','');
  if(substr($u,0,8)!=='https://'&&substr($u,0,7)!=='http://')$u='http://'.$u;
  if(!$q->is_json_content_type())
   return new WP_Error('rest_content_type_error','Content Type inválido',['status'=>415]);
  $e=wp_remote_post("$u/_search",[
   'headers'=>[
    'Content-Type'=>'application/json',
    'Access-Control-Allow-Origin'=>'*',
    'Access-Control-Allow-Methods'=>'OPTIONS, HEAD, GET, POST, PUT, DELETE',
    'Access-Control-allow-headers'=>'X-Requested-With,X-Auth-Token,Content-Type,Content-Length',
    'Authorization'=>'Basic '.base64_encode(get_option('fbg-plugin-user','').':'.get_option('fbg-plugin-pass',''))
   ],
   'body'=>json_encode($q->get_json_params())
  ]);
  if(is_wp_error($e))return [];
  $r=new WP_REST_Response(
   array_map(
    function($x){return $x->_source;},
    json_decode(
     wp_remote_retrieve_body($e)
    )->hits->hits
   )
  );
  $r->set_status(200);
  $r->header('Content-Type','application/json');
  return $r;
 }
 public function section_callback(){echo 'Blocos removidos do Gutenberg';}
 public function mult_textbox_callback($a,$p=false){if(empty($p)||$p===false)$p='text';echo '<input type="'.$p.'" id="'.$a['label_for'].'" name="'.$a['label_for'].'" value="'.get_option($a['label_for']).'" />';}
 public function textbox_callback($a){echo $this->mult_textbox_callback($a);}
 public function password_callback($a){echo $this->mult_textbox_callback($a,'password');}
 public function checkbox_callback($a){echo '<label class="FBGcheckbox"><input type="checkbox" id="'.$a['label_for'].'" name="'.$a['label_for'].'" value="'.$a['label_for'].'" '.checked(1,get_option($a['label_for']),false).' /><span></span></label>';}
 function sanitize_checkbox($i){return(isset($i)?true:false);}
 public function start(){
  wp_enqueue_style('stylefbg',plugin_dir_url(__FILE__).'css.css');
  add_settings_section('FBGsectionBlock','Configurações','','FBGFiltersGroup');
  add_settings_section('FBGsection','Blocos',[$this,'section_callback'],'FBGFiltersGroup');
  register_setting('FBGFiltersGroup','fbg-plugin-title',['type'=>'string','group'=>'FBGFiltersGroup','description'=>'','sanitize_callback'=>'sanitize_text_field','show_in_rest'=>false]);
  add_settings_field('fbg-plugin-title','Categoria',[$this,'textbox_callback'],'FBGFiltersGroup','FBGsectionBlock',['label_for'=>'fbg-plugin-title']);
  register_setting('FBGFiltersGroup','fbg-plugin-url',['type'=>'string','group'=>'FBGFiltersGroup','description'=>'','sanitize_callback'=>'sanitize_text_field','show_in_rest'=>false]);
  add_settings_field('fbg-plugin-url','Url do Elastic',[$this,'textbox_callback'],'FBGFiltersGroup','FBGsectionBlock',['label_for'=>'fbg-plugin-url']);
  register_setting('FBGFiltersGroup','fbg-plugin-user',['type'=>'string','group'=>'FBGFiltersGroup','description'=>'','sanitize_callback'=>'sanitize_text_field','show_in_rest'=>false]);
  add_settings_field('fbg-plugin-user','User do Elastic',[$this,'textbox_callback'],'FBGFiltersGroup','FBGsectionBlock',['label_for'=>'fbg-plugin-user']);
  register_setting('FBGFiltersGroup','fbg-plugin-pass',['type'=>'string','group'=>'FBGFiltersGroup','description'=>'','sanitize_callback'=>'sanitize_text_field','show_in_rest'=>false]);
  add_settings_field('fbg-plugin-pass','Password do Elastic',[$this,'password_callback'],'FBGFiltersGroup','FBGsectionBlock',['label_for'=>'fbg-plugin-pass']);
  register_setting('FBGFiltersGroup','fbg-plugin-bucket',['type'=>'string','group'=>'FBGFiltersGroup','description'=>'','sanitize_callback'=>'sanitize_text_field','show_in_rest'=>false]);
  add_settings_field('fbg-plugin-bucket','Bucket do S3',[$this,'textbox_callback'],'FBGFiltersGroup','FBGsectionBlock',['label_for'=>'fbg-plugin-bucket']);
  register_setting('FBGFiltersGroup','fbg-plugin-region',['type'=>'string','group'=>'FBGFiltersGroup','description'=>'','sanitize_callback'=>'sanitize_text_field','show_in_rest'=>false]);
  add_settings_field('fbg-plugin-region','Região do S3',[$this,'textbox_callback'],'FBGFiltersGroup','FBGsectionBlock',['label_for'=>'fbg-plugin-region']);
  register_setting('FBGFiltersGroup','fbg-plugin-path',['type'=>'string','group'=>'FBGFiltersGroup','description'=>'','sanitize_callback'=>'sanitize_text_field','show_in_rest'=>false]);
  add_settings_field('fbg-plugin-path','Diretório do S3',[$this,'textbox_callback'],'FBGFiltersGroup','FBGsectionBlock',['label_for'=>'fbg-plugin-path']);
  register_setting('FBGFiltersGroup','fbg-plugin-accesskey',['type'=>'string','group'=>'FBGFiltersGroup','description'=>'','sanitize_callback'=>'sanitize_text_field','show_in_rest'=>false]);
  add_settings_field('fbg-plugin-accesskey','Chave de Acesso (Opcional)',[$this,'password_callback'],'FBGFiltersGroup','FBGsectionBlock',['label_for'=>'fbg-plugin-accesskey']);
  register_setting('FBGFiltersGroup','fbg-plugin-secretkey',['type'=>'string','group'=>'FBGFiltersGroup','description'=>'','sanitize_callback'=>'sanitize_text_field','show_in_rest'=>false]);
  add_settings_field('fbg-plugin-secretkey','Chave Secreta (Opcional)',[$this,'password_callback'],'FBGFiltersGroup','FBGsectionBlock',['label_for'=>'fbg-plugin-secretkey']);
  foreach($this->listBlocks as $v){
   register_setting('FBGFiltersGroup',"fbg-$v",['type'=>'string','group'=>'FBGFiltersGroup','description'=>'','sanitize_callback'=>[$this,'sanitize_checkbox'],'show_in_rest'=>false]);
   add_settings_field("fbg-$v",substr($v,strpos($v,'/')+1),[$this,'checkbox_callback'],'FBGFiltersGroup','FBGsection',['label_for'=>"fbg-$v"]);
  }
  if(version_compare(get_bloginfo('version'),'5.8','>=')){
   add_filter('block_categories_all',[$this,'register_category']);
  }else{
   add_filter('block_categories',[$this,'register_category']);
  }
  add_action('enqueue_block_editor_assets',function(){
   wp_enqueue_script('fbg-plugin',plugin_dir_url(__FILE__).'js.js',array('wp-blocks','wp-i18n','wp-editor','wp-components'),true,false);
   wp_enqueue_script('fbg-plugin-posts',plugin_dir_url(__FILE__).'jsPosts.js',array('wp-edit-post'),false,false);
  });
 }
 public function sin(){
  $c=[
   ['name'=>'citySign','type'=>'string'],
   ['name'=>'postLayout','type'=>'string'],
   ['name'=>'advertisingNews','type'=>'boolean'],
   ['name'=>'lastPosts','type'=>'boolean']
  ];
  foreach($c as $v){
   register_post_meta('post',$v['name'],[
    'show_in_rest'=>true,
    'single'=>true,
    'type'=>$v['type'],
    'sanitize_callback'=>'sanitize_text_field',
    'auth_callback'=>function(){return current_user_can('edit_posts');}
   ]);
  }
 }
 public function menu(){
  add_options_page(
   'Filtros de Blocos',
   'Filtros',
   'manage_options',
   'filters-blocks',
   [$this,'filterPage']
  );
  add_menu_page(
   'Configurações',
   'Alterações de Categoria',
   'read',
   'content-sponsorships',
   [$this,'categories_menu'],
   'dashicons-category',
   5
  );
 }
 public function categories_menu(){
  $c=get_categories();
  $o=get_option('fbg-plugin-bucket','');
  $p=get_option('fbg-plugin-path','');
  wp_enqueue_media();
 ?>
  <div class="FBGcontainer">
   <h1><?php echo esc_html(get_admin_page_title()); ?></h1>
   <form action="<?php echo get_site_url().'/'.str_replace('\\','/',substr(__DIR__,strpos(__DIR__,'wp-content'))).'/data.php'; ?>" method="post">
    <input type="hidden" id="hidden" name="data" value="[]">
    <div class="FBGcolumn" style="gap:10px">
     <select id="fbgSelectCategory" class="FBGselect" name="category">
      <?php
       foreach($c as $x)
        echo '<option value="'.$x->term_id.';'.$x->slug.'">'.$x->name.'</option>';
      ?>
     </select>
     <div id="fbgSponsorShips" style="padding-top:20px;border-top:1px solid black"></div>
    </div>
    <div>
     <h1>Título da categoria na página</h1>
     <div style="display:grid;grid-template-columns:150px 300px;grid-template-rows:repeat(2,1fr);grid-column-gap:0px;grid-row-gap:10px;width:500px">
      <label for="checkTitleCategory">Usar Padrão:</label>
      <label class="FBGswitch">
       <input type="checkbox" name="isDefault" id="checkTitleCategory" checked="true">
       <span class="FBGslider FBGround"></span>
      </label>
      <label for="titleCategory" style="display:none" id="label1">Título da categoria:</label>
      <input type="text" name="title" style="display:none" id="titleCategory" value="">
     </div>
    </div>
    <div id="fbgSaveButton" style="margin-top:30px;padding-top:20px;border-top:1px solid black"></div>
   </form>
  </div>
  <script>
Array.prototype.reorder=function(x,y){return _.sortBy(this,e=>_.indexOf(x,e[y||'id']))};
document.getElementById('checkTitleCategory')
 .addEventListener('change',e=>{
  const a=e.target.checked?'none':'block',
  b=document.getElementById('label1'),
  c=document.getElementById('titleCategory');
  b.style.display=a;
  c.style.display=a
  if(e.target.checked)c.value='';
 });
window.fbgSelectClass={
 selected:null,
 n:(x,y)=>{
  let cur;
  if(y.parentNode===x.parentNode)
    for(cur=x.previousSibling;cur;cur=cur.previousSibling)
      if(cur===y)return true;
  return false
 },
 k:(n,t)=>{
  while(!n.className.includes(t)&&
   n.nodeName.toUpperCase()!='BODY'
  )n=n.parentElement;
  return n
 },
 dragOver:e=>{
  e.preventDefault();
  const l=fbgSelectClass.k(e.target,'selChild');
  if(fbgSelectClass.n(fbgSelectClass.selected,l))l.parentNode.insertBefore(fbgSelectClass.selected,l);
  else l.parentNode.insertBefore(fbgSelectClass.selected,l.nextSibling)
 },
 dragEnd:(e,f)=>{
  e.preventDefault();
  f(Array.from(
   fbgSelectClass.k(e.target,'selParent')
   .getElementsByClassName('selChild')
  ).map(x=>+x.getAttribute('data')));
  fbgSelectClass.selected=null
 },
 dragStart:e=>{
  e.dataTransfer.effectAllowed='move';
  e.dataTransfer.setData('text/plain',null);
  fbgSelectClass.selected=fbgSelectClass.k(e.target,'selChild')
 }
};
window.fbgCategorySearch={
 categories:[],
 r:i=>{fbgCategorySearch.categories.splice(i,1);fbgCategorySearch.k()},
 i:()=>{fbgCategorySearch.categories.push({id:Math.max(...(!!fbgCategorySearch.categories.length?fbgCategorySearch.categories.map(x=>x.id):[0]))+1,image:'',name:'',url:''});fbgCategorySearch.k()},
 c:(e,k,i)=>{fbgCategorySearch.categories[i][k]=e;fbgCategorySearch.k(true)},
 u:x=>x.replace(/(https?:)?(\/\/)?([^\?#]*)(([\?#])(.*))?.*/gi,(m,a,b,c,d,e,f)=>
  !!c||!!a?`${!!a?`${a}${!!b?b:''}`:''}${!!c?c
   .replace(/\s/g, '%20')
   .normalize('NFD')
   .replace(/[^-A-Za-z0-9@%._/+~]/g, '')
   .toLowerCase()
   .trim()
   .replace(/\/\/+/g, '/'):''
  }${!!e?`${e}${f
   .replace(/\s/g, '+')
   .normalize('NFD')
   .replace(/[^-A-Za-z0-9@%._/+~&=]/g, '')
   .toLowerCase()
   .trim()
  }`:''}`:''
 ),
 n:'',
 g:(e,i)=>{
  e.preventDefault();
  const k=wp.media({
   title:'Upload Image',
   multiple:false
  }).open()
  .on('select',l=>{
   const u=k.state().get('selection').first(),
   g=u.toJSON().url;
   e.target.src=g;
   fbgCategorySearch.categories[i].image=g;
   fbgCategorySearch.k()
  })
 },
 t:(o,z)=>{
  const e=x=>document.createElement(x),
   a=e('div'),
   b=e('div'),
   c=e('div'),
   d=e('button'),
   n=x=>`<span class="dashicon dashicons dashicons-${x}"></span>`;
  o.innerHTML='';
  a.className='FBGrow';
  b.className='FBGrow selParent';
  c.className='FBGrow';
  fbgCategorySearch.categories
   .map((x,i)=>{
    let g=e('div'),
     h=e('img'),
     j=e('input'),
     m=e('input'),
     k=e('button'),
     l=e('div');
    l.className='FBGrow';
    l.style.flexWrap='nowrap';
    l.style.gap=0;
    g.className='FBGcolumn selChild';
    g.setAttribute('key',x.id);
    g.setAttribute('data',x.id);
    g.setAttribute('draggable',true);
    g.ondragend=e=>fbgSelectClass.dragEnd(e,y=>fbgCategorySearch.categories=fbgCategorySearch.categories.slice().reorder(y,'id').slice());
    g.ondragleave=e=>fbgSelectClass.dragOver(e);
    g.ondragstart=e=>fbgSelectClass.dragStart(e);
    h.src=x.image||'data:image/gif;base64,R0lGODlhAQABAIABAAAAAP///yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==';
    h.className='FBGImage';
    h.addEventListener('click',e=>fbgCategorySearch.g(e,i));
    j.type='text';
    j.className='FBGinput';
    j.value=x.name;
    j.placeholder='Nome do Patrocinador';
    j.addEventListener('input',e=>fbgCategorySearch.c(e.target.value,'name',i));
    m.type='text';
    m.className='FBGinput';
    m.value=x.url;
    m.placeholder='Url do Patrocinador';
    m.addEventListener('input',e=>fbgCategorySearch.c(fbgCategorySearch.u(e.target.value),'url',i));
    k.type='button';
    k.className='FBGbutton';
    k.addEventListener('click',e=>fbgCategorySearch.r(i));
    k.innerHTML=n('trash');
    l.append(j,k);
    g.append(h,m,l);
    b.appendChild(g)
   });
  d.type='button';
  d.className='FBGbutton';
  d.addEventListener('click',e=>fbgCategorySearch.i());
  d.innerHTML=`Adicionar ${n('plus')}`;
  c.appendChild(d);
  a.append(b,c);
  o.appendChild(a);
  z.innerHTML=`<button type="submit" class="FBGbutton">Salvar ${fbgCategorySearch.n.split(';')[1]} ${n('upload')}</button>`
 },
 k:(x)=>{
  document.getElementById('hidden').value=JSON.stringify(fbgCategorySearch.categories);
  if(!x)fbgCategorySearch.t(document.getElementById('fbgSponsorShips'),document.getElementById('fbgSaveButton'))
 },
 show:async(c)=>{
  fbgCategorySearch.n=c;
  document.getElementById('fbgSponsorShips').innerHTML='...loading...<br/><div class="FBGloader"></div>';
  try{
   const r=await fetch(<?php echo "`https://$o.s3.amazonaws.com/$p/" ?>${c.split(';')[1]}.json`);
   if(r.status===200){
    const d=await r.json(),
     a=!!d.isDefault?'none':'block',
     b=document.getElementById('label1'),
     c=document.getElementById('titleCategory')
     f=document.getElementById('checkTitleCategory');
    fbgCategorySearch.categories=d.data.map((x,i)=>({id:i,...x}));
    f.checked=!!d.isDefault;
    b.style.display=a;
    c.style.display=a;
    c.value=d.title
   }
   else fbgCategorySearch.categories=[]
  }catch{fbgCategorySearch.categories=[]}
  fbgCategorySearch.k()
 }
};
(()=>{
 const s=document.getElementById('fbgSelectCategory');
 s.addEventListener('change',e=>fbgCategorySearch.show(e.target.value))
 if(!!s.value)fbgCategorySearch.show(s.value)
})()
  </script>
 <?php }
 public function filterPage(){ ?>
  <div class="FBGcontainer">
   <h1><?php echo esc_html(get_admin_page_title()); ?></h1>
   <form action="options.php" method="post">
    <div class="FBGobjectsCheck">
     <div class="FBGsubmitdiv"><?php submit_button();?></div>
     <?php
     settings_fields('FBGFiltersGroup');
     do_settings_sections('FBGFiltersGroup');
     ?>
     <div class="FBGsubmitdiv"><?php submit_button();?></div>
    </div>
   </form>
  </div>
 <?php }
 public function remove_footer_admin(){return '';}
}
$i=new FiltersBlocks();
if(isset($_GET['m'])){
 add_action('admin_notices',function(){
  ?><div class="notice notice-<?php echo (!isset($_GET['e'])?'success':'error') ?> is-dismissible"><p><?php echo $_GET['m'] ?></p></div><?php
 });
}
?>