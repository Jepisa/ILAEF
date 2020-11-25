<x-app-layout>

    <style>
        .title-activity{
            color:#69c8bd;
        }
        /* .div-activity{
             max-height: 309px; /*creo que queda bien 270px 
        } */
        @media (min-width:768px){
            .activities{
                width:71.666667%;
            }
        }
        .share-to-social-networks ul li, .share-to-social-networks ul span {
            margin: 2.75px
        }
    </style>
    
        
    <livewire:activities :activities="$activities" :lastActivities="$lastActivities"/>
        
        
</x-layout-app>

