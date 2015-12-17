<?php
					$json = file_get_contents('http://localhost:8080/Favor/work/get?compstatus=0');
					$feedArray = json_decode($json);
					foreach($feedArray as $feedItem){
	 					echo '<li>
		 						<div class="media">
				                    <a class="media-left">
				                      <img alt="img" src="img/user1.png">
				                    </a>
				                    	<div class="media-body">
				                      		<a class="catg_title">'.$feedItem->workDescription.' requested by '.$feedItem->fname.' '.$feedItem->lname.'</a>
										    <button type="button" class="btn btn-primary" id='.array_search($feedItem, $feedArray).'>Accept</button>
				                    	</div>

				                 </div>
                  			</li>
							<script>
							var li = document.getElementsByTagName("li");

							for(var i = 0;i<li.length;i++){
							    li[i].addEventListener("click", myScript);
							}

							function myScript(e){
								alert("hahahah");      
							}
						</script>
					';
				}
					//echo '</ul>';
?>