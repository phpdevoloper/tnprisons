PGDMP     4                    z            prisons    13.6    13.6 <               0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false                       0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false                       0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false                       1262    67445    prisons    DATABASE     c   CREATE DATABASE prisons WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE = 'English_India.1252';
    DROP DATABASE prisons;
                postgres    false            ?            1259    67483    districts_tn_list    TABLE     ?   CREATE TABLE public.districts_tn_list (
    dis_id integer NOT NULL,
    district_name character varying(200),
    district_tamil_name character varying(200),
    district_short_code character varying(200)
);
 %   DROP TABLE public.districts_tn_list;
       public         heap    postgres    false            ?            1259    67481    districts_tn_list_dis_id_seq    SEQUENCE     ?   CREATE SEQUENCE public.districts_tn_list_dis_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 3   DROP SEQUENCE public.districts_tn_list_dis_id_seq;
       public          postgres    false    207                       0    0    districts_tn_list_dis_id_seq    SEQUENCE OWNED BY     ]   ALTER SEQUENCE public.districts_tn_list_dis_id_seq OWNED BY public.districts_tn_list.dis_id;
          public          postgres    false    206            ?            1259    67511    menus    TABLE     E  CREATE TABLE public.menus (
    menu_id integer NOT NULL,
    menu_name_en character varying(200),
    menu_name_ta character varying(200),
    page_url character varying(200),
    last_updated date DEFAULT now(),
    updated_by character varying(200),
    created_at date DEFAULT now(),
    status character varying(100)
);
    DROP TABLE public.menus;
       public         heap    postgres    false            ?            1259    67514    menus_menu_id_seq    SEQUENCE     ?   CREATE SEQUENCE public.menus_menu_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.menus_menu_id_seq;
       public          postgres    false    210                       0    0    menus_menu_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.menus_menu_id_seq OWNED BY public.menus.menu_id;
          public          postgres    false    211            ?            1259    67561    page_content    TABLE     M  CREATE TABLE public.page_content (
    content_id integer NOT NULL,
    page_content_en character varying(1500),
    page_content_ta character varying(1500),
    page_id numeric(10,0),
    last_updated date DEFAULT now(),
    updated_by character varying(100),
    created_at date DEFAULT now(),
    status character varying(100)
);
     DROP TABLE public.page_content;
       public         heap    postgres    false            ?            1259    67559    page_content_content_id_seq    SEQUENCE     ?   CREATE SEQUENCE public.page_content_content_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 2   DROP SEQUENCE public.page_content_content_id_seq;
       public          postgres    false    215            	           0    0    page_content_content_id_seq    SEQUENCE OWNED BY     [   ALTER SEQUENCE public.page_content_content_id_seq OWNED BY public.page_content.content_id;
          public          postgres    false    214            ?            1259    67460    prison_types    TABLE     ?   CREATE TABLE public.prison_types (
    prison_type_id integer NOT NULL,
    prison_type character varying(200),
    prison_code character varying(100)
);
     DROP TABLE public.prison_types;
       public         heap    postgres    false            ?            1259    67458    prison_types_prison_type_id_seq    SEQUENCE     ?   CREATE SEQUENCE public.prison_types_prison_type_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 6   DROP SEQUENCE public.prison_types_prison_type_id_seq;
       public          postgres    false    203            
           0    0    prison_types_prison_type_id_seq    SEQUENCE OWNED BY     c   ALTER SEQUENCE public.prison_types_prison_type_id_seq OWNED BY public.prison_types.prison_type_id;
          public          postgres    false    202            ?            1259    67468    prisons_in_tamilnadu    TABLE     @  CREATE TABLE public.prisons_in_tamilnadu (
    prison_id integer NOT NULL,
    prison_name character varying(200),
    prison_locan character varying(200),
    prison_dist character varying(100),
    prison_type character varying(100),
    prison_jurisd character varying(100),
    prison_addr character varying(100)
);
 (   DROP TABLE public.prisons_in_tamilnadu;
       public         heap    postgres    false            ?            1259    67466 "   prisons_in_tamilnadu_prison_id_seq    SEQUENCE     ?   CREATE SEQUENCE public.prisons_in_tamilnadu_prison_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 9   DROP SEQUENCE public.prisons_in_tamilnadu_prison_id_seq;
       public          postgres    false    205                       0    0 "   prisons_in_tamilnadu_prison_id_seq    SEQUENCE OWNED BY     i   ALTER SEQUENCE public.prisons_in_tamilnadu_prison_id_seq OWNED BY public.prisons_in_tamilnadu.prison_id;
          public          postgres    false    204            ?            1259    67500    reformation    TABLE     l   CREATE TABLE public.reformation (
    reform_id integer NOT NULL,
    reform_name character varying(100)
);
    DROP TABLE public.reformation;
       public         heap    postgres    false            ?            1259    67503    reformation_reform_id _seq    SEQUENCE     ?   CREATE SEQUENCE public."reformation_reform_id _seq"
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 3   DROP SEQUENCE public."reformation_reform_id _seq";
       public          postgres    false    208                       0    0    reformation_reform_id _seq    SEQUENCE OWNED BY     Z   ALTER SEQUENCE public."reformation_reform_id _seq" OWNED BY public.reformation.reform_id;
          public          postgres    false    209            ?            1259    67528 	   sub_menus    TABLE     ?   CREATE TABLE public.sub_menus (
    menu_id integer NOT NULL,
    menu_name_en character varying(200),
    menu_name_ta character varying(200),
    cate_code character varying(200),
    page_url character varying(500)
);
    DROP TABLE public.sub_menus;
       public         heap    postgres    false            ?            1259    67526    sub_menus_menu_id_seq    SEQUENCE     ?   CREATE SEQUENCE public.sub_menus_menu_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.sub_menus_menu_id_seq;
       public          postgres    false    213                       0    0    sub_menus_menu_id_seq    SEQUENCE OWNED BY     O   ALTER SEQUENCE public.sub_menus_menu_id_seq OWNED BY public.sub_menus.menu_id;
          public          postgres    false    212            ?            1259    67448 	   user_info    TABLE        CREATE TABLE public.user_info (
    user_id integer NOT NULL,
    user_name character varying(200),
    user_email character varying(200),
    user_passwd character varying(200),
    user_status character varying(200),
    created_at date DEFAULT now()
);
    DROP TABLE public.user_info;
       public         heap    postgres    false            ?            1259    67446    user_info_user_id_seq    SEQUENCE     ?   CREATE SEQUENCE public.user_info_user_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.user_info_user_id_seq;
       public          postgres    false    201                       0    0    user_info_user_id_seq    SEQUENCE OWNED BY     O   ALTER SEQUENCE public.user_info_user_id_seq OWNED BY public.user_info.user_id;
          public          postgres    false    200            V           2604    67486    districts_tn_list dis_id    DEFAULT     ?   ALTER TABLE ONLY public.districts_tn_list ALTER COLUMN dis_id SET DEFAULT nextval('public.districts_tn_list_dis_id_seq'::regclass);
 G   ALTER TABLE public.districts_tn_list ALTER COLUMN dis_id DROP DEFAULT;
       public          postgres    false    206    207    207            X           2604    67516    menus menu_id    DEFAULT     n   ALTER TABLE ONLY public.menus ALTER COLUMN menu_id SET DEFAULT nextval('public.menus_menu_id_seq'::regclass);
 <   ALTER TABLE public.menus ALTER COLUMN menu_id DROP DEFAULT;
       public          postgres    false    211    210            \           2604    67564    page_content content_id    DEFAULT     ?   ALTER TABLE ONLY public.page_content ALTER COLUMN content_id SET DEFAULT nextval('public.page_content_content_id_seq'::regclass);
 F   ALTER TABLE public.page_content ALTER COLUMN content_id DROP DEFAULT;
       public          postgres    false    215    214    215            T           2604    67463    prison_types prison_type_id    DEFAULT     ?   ALTER TABLE ONLY public.prison_types ALTER COLUMN prison_type_id SET DEFAULT nextval('public.prison_types_prison_type_id_seq'::regclass);
 J   ALTER TABLE public.prison_types ALTER COLUMN prison_type_id DROP DEFAULT;
       public          postgres    false    203    202    203            U           2604    67471    prisons_in_tamilnadu prison_id    DEFAULT     ?   ALTER TABLE ONLY public.prisons_in_tamilnadu ALTER COLUMN prison_id SET DEFAULT nextval('public.prisons_in_tamilnadu_prison_id_seq'::regclass);
 M   ALTER TABLE public.prisons_in_tamilnadu ALTER COLUMN prison_id DROP DEFAULT;
       public          postgres    false    205    204    205            W           2604    67505    reformation reform_id    DEFAULT     ?   ALTER TABLE ONLY public.reformation ALTER COLUMN reform_id SET DEFAULT nextval('public."reformation_reform_id _seq"'::regclass);
 D   ALTER TABLE public.reformation ALTER COLUMN reform_id DROP DEFAULT;
       public          postgres    false    209    208            [           2604    67531    sub_menus menu_id    DEFAULT     v   ALTER TABLE ONLY public.sub_menus ALTER COLUMN menu_id SET DEFAULT nextval('public.sub_menus_menu_id_seq'::regclass);
 @   ALTER TABLE public.sub_menus ALTER COLUMN menu_id DROP DEFAULT;
       public          postgres    false    212    213    213            R           2604    67451    user_info user_id    DEFAULT     v   ALTER TABLE ONLY public.user_info ALTER COLUMN user_id SET DEFAULT nextval('public.user_info_user_id_seq'::regclass);
 @   ALTER TABLE public.user_info ALTER COLUMN user_id DROP DEFAULT;
       public          postgres    false    201    200    201            ?          0    67483    districts_tn_list 
   TABLE DATA           l   COPY public.districts_tn_list (dis_id, district_name, district_tamil_name, district_short_code) FROM stdin;
    public          postgres    false    207   ?G       ?          0    67511    menus 
   TABLE DATA           |   COPY public.menus (menu_id, menu_name_en, menu_name_ta, page_url, last_updated, updated_by, created_at, status) FROM stdin;
    public          postgres    false    210   ?J                  0    67561    page_content 
   TABLE DATA           ?   COPY public.page_content (content_id, page_content_en, page_content_ta, page_id, last_updated, updated_by, created_at, status) FROM stdin;
    public          postgres    false    215   {L       ?          0    67460    prison_types 
   TABLE DATA           P   COPY public.prison_types (prison_type_id, prison_type, prison_code) FROM stdin;
    public          postgres    false    203   N       ?          0    67468    prisons_in_tamilnadu 
   TABLE DATA           ?   COPY public.prisons_in_tamilnadu (prison_id, prison_name, prison_locan, prison_dist, prison_type, prison_jurisd, prison_addr) FROM stdin;
    public          postgres    false    205   ?N       ?          0    67500    reformation 
   TABLE DATA           =   COPY public.reformation (reform_id, reform_name) FROM stdin;
    public          postgres    false    208   ?[       ?          0    67528 	   sub_menus 
   TABLE DATA           ]   COPY public.sub_menus (menu_id, menu_name_en, menu_name_ta, cate_code, page_url) FROM stdin;
    public          postgres    false    213   V\       ?          0    67448 	   user_info 
   TABLE DATA           i   COPY public.user_info (user_id, user_name, user_email, user_passwd, user_status, created_at) FROM stdin;
    public          postgres    false    201   @c                  0    0    districts_tn_list_dis_id_seq    SEQUENCE SET     K   SELECT pg_catalog.setval('public.districts_tn_list_dis_id_seq', 1, false);
          public          postgres    false    206                       0    0    menus_menu_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.menus_menu_id_seq', 1, false);
          public          postgres    false    211                       0    0    page_content_content_id_seq    SEQUENCE SET     I   SELECT pg_catalog.setval('public.page_content_content_id_seq', 5, true);
          public          postgres    false    214                       0    0    prison_types_prison_type_id_seq    SEQUENCE SET     N   SELECT pg_catalog.setval('public.prison_types_prison_type_id_seq', 1, false);
          public          postgres    false    202                       0    0 "   prisons_in_tamilnadu_prison_id_seq    SEQUENCE SET     R   SELECT pg_catalog.setval('public.prisons_in_tamilnadu_prison_id_seq', 154, true);
          public          postgres    false    204                       0    0    reformation_reform_id _seq    SEQUENCE SET     K   SELECT pg_catalog.setval('public."reformation_reform_id _seq"', 1, false);
          public          postgres    false    209                       0    0    sub_menus_menu_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.sub_menus_menu_id_seq', 1, false);
          public          postgres    false    212                       0    0    user_info_user_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.user_info_user_id_seq', 1, false);
          public          postgres    false    200            f           2606    67491 (   districts_tn_list districts_tn_list_pkey 
   CONSTRAINT     j   ALTER TABLE ONLY public.districts_tn_list
    ADD CONSTRAINT districts_tn_list_pkey PRIMARY KEY (dis_id);
 R   ALTER TABLE ONLY public.districts_tn_list DROP CONSTRAINT districts_tn_list_pkey;
       public            postgres    false    207            j           2606    67525    menus menus_pkey 
   CONSTRAINT     S   ALTER TABLE ONLY public.menus
    ADD CONSTRAINT menus_pkey PRIMARY KEY (menu_id);
 :   ALTER TABLE ONLY public.menus DROP CONSTRAINT menus_pkey;
       public            postgres    false    210            n           2606    67571    page_content page_content_pkey 
   CONSTRAINT     d   ALTER TABLE ONLY public.page_content
    ADD CONSTRAINT page_content_pkey PRIMARY KEY (content_id);
 H   ALTER TABLE ONLY public.page_content DROP CONSTRAINT page_content_pkey;
       public            postgres    false    215            b           2606    67465    prison_types prison_types_pkey 
   CONSTRAINT     h   ALTER TABLE ONLY public.prison_types
    ADD CONSTRAINT prison_types_pkey PRIMARY KEY (prison_type_id);
 H   ALTER TABLE ONLY public.prison_types DROP CONSTRAINT prison_types_pkey;
       public            postgres    false    203            d           2606    67476 .   prisons_in_tamilnadu prisons_in_tamilnadu_pkey 
   CONSTRAINT     s   ALTER TABLE ONLY public.prisons_in_tamilnadu
    ADD CONSTRAINT prisons_in_tamilnadu_pkey PRIMARY KEY (prison_id);
 X   ALTER TABLE ONLY public.prisons_in_tamilnadu DROP CONSTRAINT prisons_in_tamilnadu_pkey;
       public            postgres    false    205            h           2606    67510    reformation reformation_pkey 
   CONSTRAINT     a   ALTER TABLE ONLY public.reformation
    ADD CONSTRAINT reformation_pkey PRIMARY KEY (reform_id);
 F   ALTER TABLE ONLY public.reformation DROP CONSTRAINT reformation_pkey;
       public            postgres    false    208            l           2606    67536    sub_menus sub_menus_pkey 
   CONSTRAINT     [   ALTER TABLE ONLY public.sub_menus
    ADD CONSTRAINT sub_menus_pkey PRIMARY KEY (menu_id);
 B   ALTER TABLE ONLY public.sub_menus DROP CONSTRAINT sub_menus_pkey;
       public            postgres    false    213            `           2606    67457    user_info user_info_pkey 
   CONSTRAINT     [   ALTER TABLE ONLY public.user_info
    ADD CONSTRAINT user_info_pkey PRIMARY KEY (user_id);
 B   ALTER TABLE ONLY public.user_info DROP CONSTRAINT user_info_pkey;
       public            postgres    false    201            ?   P  x?uT=o?H??X????I$.F?k?+A??hV???;Hl??2E\ą?p\h??9E?%J#i??f?????G>2??V?]Yh?Oms?6??f?6??????????a??T?B?eE????s?|?????????m??}?¬(1b?r?|? ?<?Yfp?2???&??V???	W?m???˱??q?;pXű?G9?EϪw?E&l.?ʺ????q??N-ą?=x!M,?Jwqԃ?AW5ʄ8ո/?<v?ϙ??ל????Z(?:?dW?Of?9R9??????t?(%1?"??eIBe?????ͷ!lR???"? p(C?TU.l???????O??ҕ"dHH????R|??D???EfD*=?/~'???z??1??`^???w?????????`??O???2?VLr?U^??s??$?`ވT8JÍ??%?~l??Q}??c??=??B)?\?x?&W?????????&
?N18??	??_?[v???ک???-x[ŕR??d????%.&?sE?0??ۈ2?g???)Y>v??cC?Y$%x??7O?Yg?,mk?;???[?3?΄?c??dM?3 މk???D??Sw?(1J,????s2[?Tw?(惨??ˉ?????|?p???S?u???NH?O/?9?IUq??qr5N7???q?=?#i+?Q+??VV???r?r]??LT??-?2???'47܁?B?}[	gj?Ƒ?3߂6?zr?JwX?Y?/n?
?"?I??z?3b??h????΅?u?????v?w(???j?+??Ɲ)kJ????rߣ!?z???????????Mœ??(F???U?Ut??Pw????g? ?????7?H H      ?   {  x??S?N?0????T??ZuG??V)
i",;???? ?c?t?C?????+_?}??B@H?us??9??\????$?H??.r??t???ZA4???D???3?KoS4<?? ?s"?P|$?????2_j?(K?vZ?!?C~cb?????[?2??U???P
?>????;*?K??J%B?@FQq	??>@??p?[?????9??3h?uX-+4?_?g??????q7Qn?d???b?z7Z???;????b?P?Y???	????~??qeȢ2'?E??????b???:6?B??DTZ?\?w??0W?Ms?]? ?ۮ?x ??A֥???꾶??"???)0*???O???z%?}]?o?a??<??T??          ?  x????N?0??٧q@T?,?V?	{?J+@=???x??p<?=?6}?ډT? q???????Y5?]ku??pH??????UV|-?|[?E????{r??ǇU??????:>d?O?߲???aY???$y?UaP?L????????bw??e})???ܤ??=??Y??:xR.,?B??=??H?,?n:A_?~?6D?o?????@=?+?@??V?Ah? ????#?{A??	lx?? ?$.&{8?tЍ?r$???С??[T??,?[?m??*?U?\դ??!???*?'?<x??㹟m,m๛?a?xDþ??????e-ɒ???Z>?v???:!?????(?Mu?F3????v?s??y???@?E?]?2?Ż_t?|???f?Z?_B??      ?   {   x?E??
B1?=_?/|?>*?66?1↘?_?µ?3g?tH?k(??lR)6,??֕cw????KڋZ?i>>E
???"OW?uWy?J?>XO?c?,cC疪۱?LBƖ?J?m??=/?      ?     x???r۸?~NS?*GOԮ????x?T?8?\`??`q+.?h?f?%_???H?=)?l??`靊ه?hk???Z6e?>?x??ފ??[??l]?ow??B?ѯ??=?'!???4??:e??O3?;?q?tI"???]???>?Jdi????r?7??eݭ????2ɂa[?§?IW??=O:???qD&"ߕm???-??.?kٴ?\???K:K??*ٱ????͝ؤ???s?n??Q@q-?Dn???@???8?UZÚ??ڮ%?? ??m???+??Ü?Op IW?????EM?f?g??B?[Q?lr?<!???݂?n[Y ?7(6?[t?J??)?V?<?񓴦???۴؈?u??+???P'????qm?0?$?	u?؃z?k?-f?hpd=?vdF?.<?L??r	???)?&쪬??a?ޖ??????DӐh%d"??e=???8?YHp??8??ѤDQw-ڧ??q????,6i??쐗?s/vb#????Г???Ӂ?-?	Y??????d?Pf?X#???)!?2.kyڦL??C????=?C=:?;Ql?"~Bg?H?N?q+??G?롶x!$Gg|n򜭪t-??Ŀ?5?Z?iq?????hU@q ?VS??????????\??<??????=??m??02??<?)# ???r?=k???N?i?EO?'???&N0
?5:??	R???/??w?	???M??A??u?p??a8???҂_?چ?Z4"???U??L?D?+?t?U?߰R?L??x????=??
<\?t?-B? a!??Lvŗ???Ȼs??C?XE濈?C?ڻ??g4?U]??_??E?1?4?????v?4&䰳;<[栺g?Q?V?????>K????[??U???/8? ?????"??<????????]*j~???W]?W-?Јd??A4?? (6??1Ę-*
آLH?????????:%?$VE?	??ujޏ??Y????G3???Px??Y*???Y4?R9SM????????if?q??a??hX`???n?nk??Vm??-???,??????????V?? ?? ??r???FJG??????$?}b1/?xGӅc???ٻӏ?0Y?3?J?????<??K??? ???;v??1?Z??K?7O?ِ?????V3t0??-yꪙhFL??̲?)?{?m-V?\???{???B???S?t??G3bN??&3!7	b6???_?Z4??LL?M@?b_?.W???@-2???J?_???<4??P????i׍h!???U[?S??9?[CЭ1??s? D3??!.??ۻ;??"?egTȼ?f??K???V??j?v&??Q??cL_?p`s??????ncI?\&??)=@?Z?ƌ§?^????Q??,?9?????1???@<?S?h>?l
??j???*???<?h>??p7?u'???y?I??\GRE͉?ޤ)Ddi?<?????i?,?9?????f??XŻh?U?#??|N9??*?a??u???D벖1?тO???D?o M?A?????84???????k?|I???i?H?????-?ۃ???)j~?a?u??bH????*??0vO??P;P??C? F???v`???U????m??_[&???Gb???Y	,9??^l???`ԕĂIk?O-?T@!?J貦??4???s!???}}N?Z???J?o?b??m?~???h1??2?u??
????`?ä??q?w{p?т?XX??ڽ?:?n:E?9e?????#U?jw???A???&PтX?-??P?ങ7???+I?l???p??bIE4ش07??%?I???hI,?<1f6????J?ZƔAQ?L?????Y9?)P?B??]??W)?D?/???>Z???U`77U??2/bL?e{`???;?a??x??X%$Kb0???S7??Ϟ!ɗ?*5?ŵ??S?-4?Q??,H?T??h????a?3???y*?y-甮X???,?????h*J?W]㈣傲<?8{???>????H??k???Ɗ?C?????;?+}Jt?F;???X?Ӻ?Ӣ???e???@& *??I?*~K?U??H?+PA?? ??Bal!?z;A??F?,ߑ???'?+????K쯺b???l^??T??Lr??jL'??^e??1@???q?Օ???Q?TFu?*?"2?#0??R??f??I??? ?G?ϑ?B>?~>?ۯz???Cb0??g,??)?6K?-dR-??*??|???w?C??W(o??+?K?fP ??*????Aym?????|?G?????e??9h6? bQq!If?.y8vEǹPaW?(Q?{??0?3b?R???.;@ ?w?????p?O,hUW??T1?\?NZ??L|>2?@?T?]?	?-???U_b?????̴k7i;8??X??ߙǷVY?3$/???;???=L?6?)!xl??11?????????.????????????M	i??zݴ?#??8??8???0??a?ggُN??C#?AcC?ĻQ??M???0?O?[????? RFGRN???U?T}??1????????BHVj??`?*SR??;O$??h?°}g>???s???Z6?B}4?ٓ?!?.?G?@V|??Eڵ7\-?m>4??п 	?#	??UYI/?<!y??:?|?g?????~?u?恴=$?o?7?j??,?Q?u?d????q(?v?????M?'???.?֝'??6???X?L,?????#??qh?{??2z?ىG???"*???I@???<?????I0:=Y??S'??S??p??:jܢ
???bLgX?0oդ?0???????S?E?Y??1qr???7?'E?w9?%,??;1?/??w{?r??5p ?????Xw?(???????~????cW  G?@L?v?mV???????????,|)*?????a?|???BOԴ??l<????#|?жǐ? gx?G?7????G?d豕&-!???zMߏ*??-??C՗bkOi"?d?M?^Ö$&i?{???????aO?v????Ǔ1??Ed?????A N???£U?8?}u??m?????٧??S?ի????oc7iU?؉F7{;??X?q??]<?x??O?C??筀?@ŮP<!Vv??????-'?????????	??^?{??f??%^?mCYZ?U?*?q??J???5&	?AO?B~K?%?G$Y???W>??\?Q???C8???c??????|1?v߲͂???ѺbSB?P{@?Wl????a{????1?2????$ߣo?(???e?~      ?   }   x?%??
A ??+?????????p??^??Ư?q?????OLl?zIZ??n??͊??6?Ω??????L?`?_????Vj?R?!?|?,@????:}???c?h??&??"~ ??0>      ?   ?  x??XMOI=7??O??!?uLHv?(YP??V?d5vcOO{g?l?)???&?Vⰹp?0K{??⟲?U?==?N??hw???z???R???jS?????XD?d'??t?????? ;?wx?Av6Ȯ?9>???+???N??X5[[???2j?V~?e?Av5?>?]?߯??(??A3?d??z,?(??<Uѿ???/?go??XS?+??/g?\zuF.?!??????=Һ??????#?	??ڝP??w?Z?UK???2}?(B?^?9?????ѭ+4??A?C_?%?4??jh?E?ٲ???9?0???????? ??}') T?-?B?$i?S?H??mt?U????ec?>???g?K1????u?}̀?>|T??q1???rXD??gX?#?A~r??b???2BG{o5Wrrh????kmr(?Ca)?X!
&??'@);??M???p???M ?2 za??kg??vd??1???@UdM???d1?cy'?^C?"e??D[??????ti?`??/?U?C?
?gς$H?8??4e??ѵ???Ώɐ??Ȃw?n?X~ˆ?bP????')?^dAԮ?%?um?㌈?h??KD???y??7??[??Ȅ+?mե??'???<?E?>,??fgr??R?????p?^M?XbOe;Hݞ??I*?#????6t?R??ʶH???Oe(E"????S?0zem4??*q6??L????OVql?|??-x?Ī.??❿??h.??b?ʆ?X?+w%?l????v(?Yƞ?c??wM??T?f?Q??yV???;2T??????h??/E9\o??x??B??}?gshk??????????F???:???gls:?f?S#A
}Vu?D?!T.3Je??-?=:?i?,???nݚ??OhEe?=S? Z?Յ???I??M`?ao?2?LB!????[??(??wQ???(V?lC4???<"?Y?????/TDi_??޲ ??~=)?,??t??C!vZ ?? ?na?L???*þ#RߎbMX :wp?irGl???Y??????(<???K????%?&?ΎG֍?ܛ????c?qQ????qc?1????n??*#QI?????ͨ?%7?"?˼Ɲ???(?0?? ?z???ֽ$I?ڿ`??9?WV???atNn9M?<???`???????=?????????[1Ŏ9??4?`??huk+?S?????kN[?q??]?CՄ??VUa]-Cc??6??_vd??f.]???K???X??j?"?!?????(??'??f??P??u002??qc:?j??W_z??5?TJ????k??iu?J3l??~?a???????z?xcќ??>????RIW?wz??	??X??|???+?????`?jϞ#???>&?E?-1?6???l9?#?N?>??8j?r?+ӗK?^?PS[&?䁻???z+????A4a?w???#sd}?(m4XK???C?l%U$>?X?2I??"񧺃????h?T!???wgR<?bnd1?=?5?3???	??j?Q?PJ?iܭ?4??X??`?yH???????%?j??~????B?!?[-????v?2k???McC?Y?0h~???>Vn????+΁??.0?'?G.?
?s??B?Lʖ!?M7^????'?D?)??"jJ???!S:?X???p?????(l&?Y;~?B??4`<????2?~U4??T??1?K??????Kw?fDm<?;55??/0^?      ?   1   x?3?,(?,?ϋOL???????3???A###]CC]C3?=... U?     