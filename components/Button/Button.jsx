function Button(props){
    return(
        <div style={{lineHeight:"2",border:"1px solid #FFF",textAlign:"center",whiteSpace:"nowrap",marginTop:"12px",width:"120px",height:"30px",marginLeft:"auto",marginRight:"auto"}}>        
        {
            props.Text
        }
        </div>
    )
}
