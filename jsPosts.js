(l=>{
 const e=l.e.createElement,
  v=l.v.PanelBody,
  u=l.v.IconButton,
  k=l.g.PluginDocumentSettingPanel,
  p=l.v.PanelRow,
  t=l.v.TextControl,
  o=l.d.compose(
   l.f.withSelect(x=>{
    const a=x("core/editor"),
     b=a?.getEditedPostAttribute("meta");
    return{
     meta:!!b?b["citySign"]:'',
     postType:a?.getPostTypeLabel()?.toLowerCase()??''
    }
   }),
   l.f.withDispatch(x=>({
    setMeta:v=>x("core/editor").editPost({meta:{citySign:v}})
   }))
  )(
   n=>{
    if(n.postType!=='post')return null;
    else return e(
     k,
     {
      name:'citySignField',
      title:'Assinatura de Cidade',
      initialOpen:true,
      icon:'shield'
     },
     e(
      p,
      null,
      e(
       t,
       {
        label:'Nome da cidade',
        value:n.meta,
        onChange:v=>n.setMeta(v)
       }
      )
     )
    )
   }
  ),
  h=l.d.compose(
   l.f.withSelect(x=>{
    const a=x("core/editor"),
     b=a?.getEditedPostAttribute("meta");
    return{
     meta:!!b?b["postLayout"]:'standard',
     postType:a?.getPostTypeLabel()?.toLowerCase()??''
    }
   }),
   l.f.withDispatch(x=>({
    setMeta:v=>x("core/editor").editPost({meta:{postLayout:v}})
   }))
  )(
   n=>{
    if(n.postType!=='post')return null;
    else return e(
     k,
     {
      name:'postLayoutField',
      title:'Layout do Post',
      initialOpen:true,
      icon:'admin-appearance'
     },
     e(
      p,
      null,
      e(
       'div',
       null,
       e(
        'label',
        {
         for:'FBGswitchPostLayout'
        },
        'Admitir Layout 2'
       ),
       e(
        'label',
        {
         className:'FBGswitch'
        },
        e(
         'input',
         {
          id:'FBGswitchPostLayout',
          type:'checkbox',
          checked:!!n.meta&&n.meta!=='standard',
          onChange:v=>n.setMeta(v.target.checked?'layout_2':'standard')
         }
        ),
        e('span',{className:'FBGslider FBGround'})
       )
      )
     )
    )
   }
  ),
  g=l.d.compose(
   l.f.withSelect(x=>{
    const a=x("core/editor"),
     b=a?.getEditedPostAttribute("meta");
    return{
     meta:!!b?!!b["advertisingNews"]??false:false,
     postType:a?.getPostTypeLabel()?.toLowerCase()??''
    }
   }),
   l.f.withDispatch(x=>({
    setMeta:v=>x("core/editor").editPost({meta:{advertisingNews:v}})
   }))
  )(
   n=>{
    if(n.postType!=='post')return null;
    else return e(
     k,
     {
      name:'advertisingNewsField',
      title:'Publicidade',
      initialOpen:true,
      icon:'money-alt'
     },
     e(
      p,
      null,
      e(
       'div',
       null,
       e(
        'label',
        {
         for:'FBGswitchAdvertisingNews'
        },
        'Ativar Publicidade'
       ),
       e(
        'label',
        {
         className:'FBGswitch'
        },
        e(
         'input',
         {
          id:'FBGswitchAdvertisingNews',
          type:'checkbox',
          checked:n.meta,
          onChange:v=>n.setMeta(v.target.checked)
         }
        ),
        e('span',{className:'FBGslider FBGround'})
       )
      )
     )
    )
   }
  );
 l.b.registerPlugin(
  'city-sign-plugin',
  {
   icon:'shield',
   render:({postType,meta,setMeta})=>e(o)
  }
 );
 l.b.registerPlugin(
  'post-layout-plugin',
  {
   icon:'admin-appearance',
   render:({postType,meta,setMeta})=>e(h)
  }
 );
 l.b.registerPlugin(
  'advertising-news-plugin',
  {
   icon:'money-alt',
   render:({postType,meta,setMeta})=>e(g)
  }
 )
})({
 b:window.wp.plugins,
 g:window.wp.editPost,
 d:window.wp.compose,
 e:window.wp.element,
 f:window.wp.data,
 v:wp.components
})