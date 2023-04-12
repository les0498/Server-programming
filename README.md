# Server-programming
2021-2

<b>1. < 모여봐요 동물의 숲 카페 > - 메인 페이지 화면 <b>


![image](https://user-images.githubusercontent.com/92281453/231516635-84c296cf-11a5-42a1-9642-82a1d9e7bb3b.png)

![image](https://user-images.githubusercontent.com/92281453/231516612-9101f0a1-84ef-496c-a204-0ab3de273acb.png)

![image](https://user-images.githubusercontent.com/92281453/231516690-041e1459-b8a6-4b7b-822c-1f139974a0f7.png)



● 상단 메뉴바 (header.php)
:  상단 메뉴바의 목록을 기존 사이트에 있던 home 목록 이외의 공지사항, 인기글, 전체글, 자유게시판, 팁 게시판, 그림 게시판을 추가하여 총 7개로 구성했다. 



● 메인페이지 사진 
:  모여봐요 동물의 숲 게임의 이미지 사진을 가운데에 추가해줬다.



● 인기글 (main.php)

![image](https://user-images.githubusercontent.com/92281453/231516728-3ddb7c94-857f-4a7d-91cf-4965565ee2a0.png)


: 조회수가 10이상이 넘은 글들만 인기글에 보여지도록 했고, 상위 5위 글들만 출력되도록 했다. 또한 글을 작성했을 때, 첨부한 사진이 출력되도록 함과 동시에 설정한 카테고리, 제목 등이 같이 보여주도록 만들어줬다. 
 
 
 
● 공지사항 (main.php)

![image](https://user-images.githubusercontent.com/92281453/231516757-cded291d-8516-44cd-a385-62dac7c5857b.png)


: 카테고리 옵션에서 [공지]를 선택해 올린 글들만 뜨도록 만들었고, 5개의 공지글들만 보이도록 설정했으며, [공지] 카테고리가 출력되도록 만들어줬다. 



● 전체글  (main.php)

![image](https://user-images.githubusercontent.com/92281453/231516785-157a1428-de60-4666-a643-fec3e7567d44.png)


:  작성한 글들의 전체 글들이 뜨도록 만들었고, 10개의 최신 글만 보이도록 설정했으며, 글마다 설정한 카테고리 옵션들이 맨 앞에 뜨도록 만들어줬다. 




● 사이드 메뉴바 (sidebar.php) 

![image](https://user-images.githubusercontent.com/92281453/231516805-0c9935e5-1804-44a8-b5ff-af4dc6b9c741.png) ![image](https://user-images.githubusercontent.com/92281453/231516855-5e425d30-7bdd-40f1-b74f-69fefd4d4c4b.png)

 
: 화면을 내리거나 올려도 옆에 고정된 상태로 있도록 만들어줬고, 로그인을 했을 때의 회원 정보(회원이름, 레벨, 포인트)를 출력되도록 만들어줬다. 로그아웃 했을 때는 값이 입력되지 않은 상태로 되도록 만들어줬다. 사이드 메뉴바의 목록은 전체메뉴, home, 글쓰기, 공지사항, 인기글, 회원정보 수정 형태로 클릭했을 때의 폼으로 넘어가도록 만들어줬다. 

<hr>

2. 공지사항 화면 (상단 메뉴바에 있는 공지사항을 눌렀을 때의 화면)

![image](https://user-images.githubusercontent.com/92281453/231516894-b88a7b50-ead4-49aa-97ed-2ef8026e38a8.png)

![image](https://user-images.githubusercontent.com/92281453/231516918-41ded395-e5be-48e5-8c78-5f294b1e3ec9.png)




● 공지사항의 php관리 및 관리자만 작성 가능 기능
: 공지사항의 form, insert, list, modify_form, modify,view,delete를 bnotice로 새로 만들어 관리하도록 해줬고, 공지사항에서 글쓰기 버튼을 누르게 되면, 관리자 이외의 회원은 못쓰도록 설정해줬다. 



● [공지] 옵션박스 설정 

![image](https://user-images.githubusercontent.com/92281453/231516932-a39dac3c-ff8c-4a64-8152-a95bc124db4f.png) ![image](https://user-images.githubusercontent.com/92281453/231516942-c33b3f2a-8632-4ebd-afe4-9e08e6aad9c1.png)


: 옵션 박스를 이용해 카테고리 목록을 만들어줬다. 공지사항 게시판이기 때문에 seleted로 공지에 고정을 시켜줬고, 카테고리 목록은 공지, 자유게시판, 팁 게시판, 그림 게시판 총 4가지를 옵션 목록으로 만들었다. 공지사항 목록에서 옵션 박스에서 선택한 [공지]를 출력되도록 만들어줬다. 



● [공지] 글 출력 
:  전체글에서 카테고리 옵션을 [공지]로 설정한 글들만 출력되도록 $sql"select * from board where category = '[공지]' order by num desc"; 작성해줬다. 


<hr>

3. 인기글 화면 (상단 메뉴바에 있는 인기글을 눌렀을 때의 화면) (best_list.php) 

![image](https://user-images.githubusercontent.com/92281453/231516972-8e1cede9-a9df-4ce1-8c9c-a6a295d6eb63.png)




● 인기글 (조회수에 따른 출력)
: 조회수에 따라서 정렬하고, 조회수가 10이상이 넘는 글들만 보이도록 $sql"select * from board where hit >= 10 order by hit desc";을 작성해줬다. 


<hr>

4. 자유게시판, 팁게시판, 그림게시판 화면 

![image](https://user-images.githubusercontent.com/92281453/231516996-433f1472-04f1-46dd-bb42-0d161c88e4d7.png)

![image](https://user-images.githubusercontent.com/92281453/231517013-48eb993c-77aa-49fd-9fc7-842543dfabed.png)

![image](https://user-images.githubusercontent.com/92281453/231517034-59275965-5fe5-41dc-8bd7-b1dee19a0e09.png)

![image](https://user-images.githubusercontent.com/92281453/231517058-e7c37192-1f36-4f26-8869-be114636a9de.png)

: 자유게시판은 form, insert, list, modify_form, modify,view,delete을 freeboard로 묶어 php를 관리해줬고, 팁 게시판도 tipboard로, 그림 게시판은 artboard로 묶어서 php를 따로 관리해 목록이나 수정하기, 글쓰기 등을 눌러도 해당 게시판으로 이동하도록 설정해줬다. 또한, sql 문을 작성해 카테고리 옵션에서 설정한대로 글들이 뜨도록 작성해줬다.  



<hr>


5. 이미지 출력하기 

![image](https://user-images.githubusercontent.com/92281453/231517093-bd2aaa01-b0ea-4bf4-9f85-315e32472f33.png)

: 글을 작성할 때 첨부파일을 넣고 글을 올리게 되면 첨부한 사진이 글 내용에 출력되도록 코드를 작성해 나타내줬다. 

<hr>


6. 공감 기능 

![image](https://user-images.githubusercontent.com/92281453/231517122-c2ef9f97-d02d-415b-892f-7ffa637f4148.png)


: 글 아래 공감 기능을 누르면 카운트가 1올라가도록 만들고 싶었으나 새로 고침을 하면 계속 숫자가 카운트되는 문제가 일어나서 기능 개발에는 실패했다. 

<hr>


7. 창의적 개발 내용 
: 사이드 메뉴바 기능과 메인페이지 인기글에 글을 작성할 때, 첨부한 사진이 출력되도록 하여 시각적으로 보기 편하게 만든 기능, 카테고리 옵션을 만들어 카테고리 옵션을 설정한 대로 게시판에 출력되도록 한 기능, 공지사항은 관리자만 가능하도록 한 기능들이 창의적으로 개발한 내용이라고 볼 수 있습니다. 
