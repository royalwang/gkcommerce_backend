<script>
var qp = null;
if(window.location.hash) {
    qp = location.hash.substring(1);
}
else {
    qp = location.search.substring(1);
}
qp = qp ? JSON.parse('{"' + qp.replace(/&/g, '","').replace(/=/g,'":"') + '"}',
function(key, value) {
    return key===""?value:decodeURIComponent(value) }
):{}
window.opener.onOAuthComplete(qp);
window.close();
</script>
