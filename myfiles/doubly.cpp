#include<iostream>
#include<stdlib.h>
#include<conio.h>
using namespace std;
struct node {
    int data;
    struct node* next;
    struct node* per;
};

    struct node* Start_;
    struct node* End_;

struct node *temp, *head, *ptr;
void insert_in_list();
void disp_list();

int main() {
    head = (struct node*) malloc(sizeof(struct node));
    Start_ = head;
    head->per = NULL;
    head->next= NULL;
    head->data = 0;
    int sel=1;
    while(sel) {
        cout<<"------------ Select Choice --------------";
        cout<<"\n1. Insert\n";
        cout<<"2. Display\n";
        int a;
        cin>>a;
        switch(a) {
            case 1 : insert_in_list();
                     break;
            case 2 : disp_list();
                     break;
        }
    cout<<"1 To Count. 0 To exit : ";
    cin>>sel;
    }
}

void insert_in_list() {
    temp = (struct node*) malloc(sizeof(struct node));
    int counter;
    counter = head->data;
    cout<<"Node Value :";
    int X=0;
    cin>>X;
    temp->per = head;
    temp->data = X;
    temp->next = head->next;
    head->next = temp;
    counter++;
    head->data = counter;
    cout<<"\n\n Inserted \n\n";
}

void disp_list() {
    ptr = Start_;
    while(ptr != NULL) {
        cout<<ptr->data<<" ";
        ptr=ptr->next;
    }
    getch();
}
