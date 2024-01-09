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
  );
 l.b.registerPlugin(
  'city-sign-plugin',
  {
   icon:'shield',
   render:({postType,meta,setMeta})=>e(o)
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