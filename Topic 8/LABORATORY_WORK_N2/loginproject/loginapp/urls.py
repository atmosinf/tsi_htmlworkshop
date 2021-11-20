from django.urls import path, include
from django.urls import re_path
from loginapp import views

app_name = 'loginapp'

urlpatterns = [
    re_path(r'^$', views.index, name='index'),
    path('register/', views.register, name='register'),
    path('logout/', views.user_logout, name='logout'),
    path('special/', views.special, name='special'),
    path('login/', views.user_login, name='login'),
]